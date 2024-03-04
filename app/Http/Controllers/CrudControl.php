<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class CrudControl extends Controller
{
    public function index(){
      $student = Student::all();
      return view('students.index', ['student' => $student]);
    }


    public function create(){
      return view('students.create');
    }

    public function store(Request $request){
      $data = $request->validate([
         'name' => 'required',
          'todo' => 'required'
      ]);
      $newStu = Student::create($data);
      return redirect('/student');
    }

    public function edit(Student $student){
      return view('students.edit',['student' => $student]);
    }

    public function update(Student $student, Request $request){
      $data = $request->validate([
            'name' => 'required',
            'todo' => 'required'
      ]);
      $student->update($data);
      return redirect('/student')->with('success', 'Student Update Successfully');
    }

    public function destroy(Student $student){
        $student->delete();
      return redirect('/student')->with('success', 'Student Delete Successfully');
    }
}
