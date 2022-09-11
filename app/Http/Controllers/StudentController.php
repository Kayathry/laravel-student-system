<?php

namespace App\Http\Controllers;
use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
     public function index()
    {
        $students = Student::all();
        return view ('student.index')->with('student', $students);
    }
 
    
    public function create()
    {
        return view('student.create');
    }
 
   
    public function store(Request $request)
    {
        $input = $request->all();
        Student::create($input);
        return redirect('student')->with('flash_message', 'Student Addedd!');  
    }
 
    
    public function show($id)
    {
        $student = Student::find($id);
        return view('student.show')->with('student', $student);
    }
 
    
    public function edit($id)
    {
        $student = Student::find($id);
        return view('student.edit')->with('student', $student);
    }
 
  
    public function update(Request $request, $id)
    {
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

