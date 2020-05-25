<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function showFormLogin()
    {
        return view('login');
    }

    public function login(Request $request)
    {
        $username = $request->username;
        $password = $request->password;

        $user = [
            'username'=>$username,
            'password'=>$password
        ];

        if (Auth::attempt($user)) {
            return redirect()->route('customers.list');
        } else {
            return back();
        }
    }
}
