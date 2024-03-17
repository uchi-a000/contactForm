<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class AuthController extends Controller
{
    public function register()
    {
        return view('auth.register');
    }

    public function store()
    {
        return view('auth.login');
    }

    public function admin()
    {
        return view('auth.admin');
    }


}
