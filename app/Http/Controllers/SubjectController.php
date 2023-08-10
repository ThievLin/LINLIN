<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Subject;

class SubjectController extends Controller
{
   public function index()
    {
        $subjects = Subject::all();
        return view ('subjects.index')->with('subjects',$subjects);
    }

    public function create()
    {
        return view('subjects.createsubject');
    }

    public function store(Request $request)
    {
        // dd($request->all());
    $request->validate([
                'Skill' => 'required',
                'time' => 'required',
                'teacher' => 'required',
                        ]);

        // $input = $request->all();
        $subject = Subject::all();
        $input = $request->all();
    
        Subject::create($input);
        return redirect('subject')->with('flash_message' , 'Subject Addedd!');
    }

    public function show($id)
    {
        $subject = Subject::find($id);
        return view('subjects.show')->with('subjects', $subject);
    }

    public function edit($id)
    {
        $subject = Subject::find($id);
        return view('subjects.edit')->with('subjects', $subject);
    }
    
    public function update(Request $request, $id)
    {
        $request->validate([
    
            'Skill' => 'required',
            'time' => 'required',
            'teacher' => 'required',   
         ]);
        $subject = Subject::find($id);
        $input = $request->all();
        $subject->update($input);
        return redirect('subject')->with('flash_message', 'subject Updated!');  
    }

    public function destroy($id)
    {
        Subject::destroy($id);
        return redirect('subject')->with('flash_message', 'Student deleted!');
    }
}
