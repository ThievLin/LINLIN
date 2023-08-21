<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
use App\Models\Subject;

class StudentController extends Controller
{
    public function index(Request $request)
    {
        $students = Student::all();
        $subjects = Subject::all();
        
        return view ('students.index', ['students' => $students, 'subjects' => $subjects]);
    }

    public function create()
    {
        $subject = Subject::all();
        return view('students.create', ['subjects'=>$subject] );
    }

    public function store(Request $request)
{
        $request->validate([
        'firstname' => 'required',
        'lastname' => 'required',
        'gender' => 'required',
        'age' => 'required',
        'dob' => 'required',
    ]);

        // dd($request->file());
        $input = $request->all();

        if($request->hasFile('image'))
        {
            $destination_path = 'public/images/students';
            $image = $request->file('image');
            $image_name = $image->getClientOriginalName();
            $path = $request->file('image')->StoreAs($destination_path,$image_name);

            $input['image']= $image_name;
        }

        Student::create($input);
        return redirect('student')->with('flash_message' , 'Student Addedd!');
    }

    public function show($id)
    {
        $student = Student::find($id);
        return view('students.show')->with('students', $student); 
    }

    public function edit($id)
    {
        $student = Student::find($id);
        return view('students.edit')->with('students', $student);
    
    }
    
    public function update(Request $request, $id)
    {
        $request->validate([
            'firstname' => 'required',
            'lastname' => 'required',
            'gender' => 'required',
            'age' => 'required',
            'dob' => 'required',
            'image' => 'required',
        ]);
        $student = Student::find($id);
        $input = $request->all();
        $student->update($input);
        return redirect('student')->with('flash_message', 'student Updated!');  
    }

    public function destroy($id)
    {
        Student::destroy($id);
        return redirect('student')->with('flash_message', 'Student deleted!'); 
    }
  
    
}








