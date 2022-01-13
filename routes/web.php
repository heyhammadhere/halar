<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\TeacherController;
use Illuminate\Support\Facades\Route;

Route::get("admin-signup", [AuthController::class, "getAdminSignup"]);
Route::post("admin-signup", [AuthController::class, "postAdminSignup"]);
Route::get("admin-login", [AuthController::class, "getAdminLogin"]);
Route::post("admin-login", [AuthController::class, "postAdminLogin"]);
Route::get("admin-portal", [AdminController::class, "getAdminPortal"]);

Route::get("teacher-signup", [AuthController::class, "getTeacherSignup"]);
Route::post("teacher-signup", [AuthController::class, "postTeacherSignup"]);
Route::get("teacher-login", [AuthController::class, "getTeacherLogin"]);
Route::post("teacher-login", [AuthController::class, "postTeacherLogin"]);
Route::get("teacher-portal", [TeacherController::class, "getTeacherPortal"]);

Route::get("student-signup", [AuthController::class, "getStudentSignup"]);
Route::post("student-signup", [AuthController::class, "postStudentSignup"]);
Route::get("student-login", [AuthController::class, "getStudentLogin"]);
Route::post("student-login", [AuthController::class, "postStudentLogin"]);
Route::get("student-portal", [StudentController::class, "getStudentPortal"]);