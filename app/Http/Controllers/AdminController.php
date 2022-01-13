<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    function getAdminPortal()
    {
        return view("admin.admin-portal");
    }
}