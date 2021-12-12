<?php

namespace App\Http\Controllers;

use App\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index(){
        $data = Student::all();
        return response()->json($data,200);
    }
    public function store(Request $request){
        $student = new Student();
        $student->Name = $request->Name;
        $student->Age = $request->Age;
        $student->Qualification = $request->Qualification;
        $student->save();
        return response()->json($student,200);
    }
}
