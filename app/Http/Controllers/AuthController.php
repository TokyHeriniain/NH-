<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Hash;

class AuthController extends Controller
{
    public function login(Request $request)
    {
        #$password = Hash::make('123456');  hash password 
        #dd($password);
        return view('auth.login');
    }

    public function auth_login(Request $request)
    {
        dd($request->all());
    }

    public function forgot(Request $request)
    {
        return view('auth.forgot');
    }
}
