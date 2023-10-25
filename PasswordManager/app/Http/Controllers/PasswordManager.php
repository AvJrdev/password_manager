<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PasswordManager extends Controller
{
    public function index()
    {
        return view('passwords.index');
    }

    public function create()
    {
        return view('passwords.create');
    }
}
