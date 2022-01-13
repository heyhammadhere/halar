<?php

namespace Database\Seeders;

use App\Models\Admin;
use App\Models\Student;
use App\Models\Teacher;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        Admin::create([
            "name" => "Muhammad Hammad",
            "email" => "heyhammadhere@gmail.com",
            "password" => Hash::make("admin")
        ]);
        Admin::create([
            "name" => "Haider Ali",
            "email" => "heyhaiderhere@gmail.com",
            "password" => Hash::make("admin")
        ]);
        Teacher::create([
            "name" => "Muhammad Hammad",
            "email" => "heyhammadhere@gmail.com",
            "password" => Hash::make("admin")
        ]);
        Teacher::create([
            "name" => "Haider Ali",
            "email" => "heyhaiderhere@gmail.com",
            "password" => Hash::make("admin")
        ]);
        Student::create([
            "name" => "Muhammad Hammad",
            "email" => "heyhammadhere@gmail.com",
            "password" => Hash::make("admin")
        ]);
        Student::create([
            "name" => "Haider Ali",
            "email" => "heyhaiderhere@gmail.com",
            "password" => Hash::make("admin")
        ]);
    }
}