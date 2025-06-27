<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;


class Studentcontroller extends Controller
{

       public function index()
       
       {

              $student=Student::get();
              
              return view('students.index',compact('student'));
       }



       public function create()
       {
              return view('students.create');
       }


       public function store(Request $request)
       {

              $request->validate([
                     'name' => 'required',
                     'email' => 'required|email|unique:students',
                     'course' => 'required',
              ]);


              Student::create(
                     [
                            'name'=>$request->name,
                            'email'=>$request->email,
                            'course'=>$request->course,
                     ]
              );
              return redirect()->route('students.index')->with('success', 'Student added successfully!');
       }


       public function destroy($id)
       {
              $student=Student::findOrFail($id);
              $student->delete();
              return redirect()->route('students.index')->with('success', 'Student deleted!');
       }


       public function edit($id){
              $student=Student::findOrFail($id);
              return view("students.edit",compact('student'));
       }


       public function update(Request $request, $id){
              // $request->validate([
              //        'name' => 'required',
              //        'email' => 'required|email|unique:students',
              //        'course' => 'required',
              // ]);

            


              
              Student::findOrFail($id)->update(
                     [
                            'name'=>$request->name,
                            'email'=>$request->email,
                            'course'=>$request->course,
                     ]
                     );

              return redirect()->route('students.index')->with('success', 'Student Updated successfully!');

             
       }
}
