<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginValidationController extends Controller
{
    public function  verification1()
    {
        return view('loginform');
    }
    public function verification2()
    {
        return redirect()->route('dashboard');
    }
}
