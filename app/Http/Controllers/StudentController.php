<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    function getStudentPortal()
    {
        return view("student.student-portal");
    }
}