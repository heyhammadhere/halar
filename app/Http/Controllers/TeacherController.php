<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TeacherController extends Controller
{
    function getTeacherPortal()
    {
        return view("teacher.teacher-portal");
    }
}