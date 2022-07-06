<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//use App\Models\UsersModel; // モデルの利用宣言
use Illuminate\Support\Facades\DB;

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
        $data = $request->only(['email', 'passwd']);
        
        // 入力データのvalidate
        $error = [];
        if($data['email'] == ''){
            $error[] = 'email';
        }
        if($data['passwd'] == ''){
            $error[] = 'passwd';
        }
        $userModel = DB::table('users_models');
        $user = $userModel->where('email', $data['email'])->get();
        var_dump($user);

        return "";
        //return view();
    }
    /*
    // 雑なmodelのテスト
    public function modelTest(){
        $userModel = new UsersModel; // Models/UsersModel.phpから
        $value = $userModel->find(1); // WHERE id = 1らしい 要調査
        return view('hello', compact('value')); // compact()で送るみたい
    }*/
}
