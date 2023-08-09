<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Background;
use App\Models\Student;

class BackgroundController extends Controller
{
    public function index()
    {
        $backgrounds = Background::all();
        $students = Student::all();
        return view ('backgrounds.index', ['backgrounds' => $backgrounds, 'students' => $students]);
    }

    public function create()
    {
        $data = Student::all();
        return view('backgrounds.createbackground', ['students'=>$data] );
    }

    public function store(Request $request)
    {
        // dd($request->all());
        $request->validate([
                'highschool' => 'required',
                'graduate' => 'required',
                        ]);
        $background = Background::all();
        $input = $request->all();
    
        Background::create($input);
        return redirect('background')->with('flash_message' , 'backgrounds Addedd!');
    }

    public function show($id)
    {
        $backgrounds = Background::find($id);
        return view('backgrounds.show')->with('backgrounds', $backgrounds);
    }

    public function edit($id)
    {
        $backgrounds = Background::find($id);
        return view('backgrounds.edit')->with('backgrounds', $backgrounds);
    }
    
    public function update(Request $request, $id)
    {
        $request->validate([
                'highschool' => 'required',
                'graduate' => 'required',    
         ]);
         $background = Background::find($id);
         $input = $request->all();
         $background->update($input);
         return redirect('background')->with('flash_message', 'background Updated!');  
    }

    public function destroy($id)
    {
        Background::destroy($id);
        return redirect('background')->with('flash_message', 'Student deleted!');
    }
}
