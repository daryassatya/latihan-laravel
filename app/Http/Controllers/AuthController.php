<?php

namespace App\Http\Controllers;

class AuthController extends Controller
{
    public function index()
    {
        return view('auths.index', [
            'title' => 'Login',
        ]);
    }

    public function register()
    {
        return view('auths.register', [
            'title' => 'Registration',
        ]);
    }
}
