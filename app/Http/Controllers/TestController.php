<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class TestController extends Controller
{
    //
    function fnAddStudent(Request $req){
        $name=$req->stud_name;
        $contact=$req->stud_contact;
        $address=$req->stud_address;
        $studentObj=new Student([
            'student_name'=>$name,
            'student_contact'=>$contact,
            'student_address'=>$address
        ]);
        $saveData = $studentObj->save();
        If($saveData){
            return view('studentregistration',['message'=>"data inserted successfully"]);
        }
        else{
            return view('studentregistration',['message'=>"error"]);
        }

    }
}
