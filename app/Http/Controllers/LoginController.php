<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    //
    public function index()
    {
        return view('index');
    }
    public function loginCheck(Request $request)
    {
        $email = $request->email;
        $pass = $request->pass;
        return "{{ $email }} ";
    }
}
