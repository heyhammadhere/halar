<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Login extends Component
{
    public $action;
    public function __construct($action)
    {
        $this->action = $action;
    }
    public function render()
    {
        return view('components.login');
    }
}