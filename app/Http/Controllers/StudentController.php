<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;


class StudentController extends Controller
{
    public function index()
    {
      $students = Student::all();
      return view('index')->with('students', $students);
    }
    public function create()
    {
      return view('create');
    }
    public function edit($id)
    {
      $student = Student::find($id);
      return view('edit')->with('student', $student);
    }
    public function update(Request $request, $id)
    {
      //dd('Submitted!');
      //store data into Student Table
      $student =Student::find($id);
      $student->name = $request->name;
      $student->registration_id = $request->registration_id;
      $student->department_name = $request->department_name;
      $student->info = $request->info;
      $student->save();

      return redirect()->route('index');
    }
    public function store(Request $request)
    {
      $this->validate($request, [
         'name'                   =>  'required|string|max:10',
         'registration_id'        =>  'required|integer',
         'department_name'        =>  'required|string',
         'info'                    =>  'nullable',
      ]);
      $student = new Student;
      $student->name = $request->name;
      $student->registration_id = $request->registration_id;
      $student->department_name = $request->department_name;
      $student->info = $request->info;
      $student->save();

      return redirect()->route('index');
    }

    public function delete($id)
    {
      //dd('Submitted!');
      //store data into Student Table
      $student =Student::find($id);
      $student->delete();

      return redirect()->route('index');
    }


}
