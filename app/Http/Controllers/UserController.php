<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class UserController extends Controller
{
    private $student;
     // start for home
     function index()
     {
         return view('welcome');
     }
     // end for home 
    //  start for student 
     function student()
     {
        return view('student');
     }
    //  end for student 
     // start for addstudent
     function addstudent(Request $request)
     {
         $this->student = new Student;
         $this->student->name = $request->name;
         $this->student->email = $request->email;
         $this->student->save();
        //  return 'success'; 
        return redirect()->back()->with('message', 'Data successfully inserted');
     }
     // end for addstudent 
}
