<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UsersModel; // モデルの利用宣言

class LoginController extends Controller
{
    //
    public function index()
    {
        return view('index');
    }
    public function loginCheck(Request $request)
    {
        //$userModel = new UsersModel;
        $email = $request->email;
        $pass = $request->pass;
        return "{{ $email }} ";
    }
    // 雑なmodelのテスト
    public function modelTest(){
        $userModel = new UsersModel; // Models/UsersModel.phpから
        $value = $userModel->find(1); // WHERE id = 1らしい 要調査
        return view('hello', compact('value')); // compact()で送るみたい
    }
}
