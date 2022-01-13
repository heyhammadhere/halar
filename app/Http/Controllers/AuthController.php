<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    function getAdminSignup()
    {
        return view("signup", [
            "title" => "Admin Signup"
        ]);
    }
    function postAdminSignup()
    {
    }
    function getTeacherSignup()
    {
        return view("signup", [
            "title" => "Teacher Signup"
        ]);
    }
    function postTeacherSignup()
    {
    }
    function getStudentSignup()
    {
        return view("signup", [
            "title" => "Student Signup"
        ]);
    }
    function postStudentSignup()
    {
    }
    function getAdminLogin()
    {
        return view("login", [
            "title" => "Admin Login"
        ]);
    }
    function postAdminLogin()
    {
        validator(request()->all(), [
            "email" => ["required", "email"],
            "password" => ["required", "min:5", "max:20"]
        ])->validate();
        if (auth()->guard("admin")->attempt(request()->only([
            "email",
            "password"
        ]))) {
            return redirect("admin-portal");
        }
        return redirect()->back()->withErrors([
            "auth" => "Invalid Credentials"
        ]);
    }
    function getTeacherLogin()
    {
        return view("login", [
            "title" => "Teacher Login"
        ]);
    }
    function postTeacherLogin()
    {
        validator(request()->all(), [
            "email" => ["required", "email"],
            "password" => ["required", "min:5", "max:20"]
        ])->validate();
        if (auth()->guard("teacher")->attempt(request()->only([
            "email",
            "password"
        ]))) {
            return redirect("teacher-portal");
        }
        return redirect()->back()->withErrors([
            "auth" => "Invalid Credentials"
        ]);
    }
    function getStudentLogin()
    {
        return view("login", [
            "title" => "Student Login"
        ]);
    }
    function postStudentLogin()
    {
        validator(request()->all(), [
            "email" => ["required", "email"],
            "password" => ["required", "min:5", "max:20"]
        ])->validate();
        if (auth()->guard("student")->attempt(request()->only([
            "email",
            "password"
        ]))) {
            return redirect("student-portal");
        }
        return redirect()->back()->withErrors([
            "auth" => "Invalid Credentials"
        ]);
    }
}