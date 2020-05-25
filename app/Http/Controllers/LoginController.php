<?php

namespace App\Http\Controllers;

class LoginController extends Controller
{
    public function showFormLogin()
    {
        return view('login');
    }
}
