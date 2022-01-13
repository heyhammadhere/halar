<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Signup extends Component
{
    public function __construct()
    {
    }
    public function render()
    {
        return view('components.signup');
    }
}