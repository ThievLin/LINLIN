<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class StudentController extends Controller
{
    public function index()
    {
        $students = student::all();
        return view ('students.index')->with('students',$students);
    }

    public function create()
    {
        return view('students.create');
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

        // $input = $request->all();

        $input = $request->all();
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








