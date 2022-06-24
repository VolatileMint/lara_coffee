<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    //新規追加のメソッド
    public function index()
    {
      return "hello, world";
    }
    public function viewTest()
    {
    //変更箇所
      $message = "Hello Laravel!!";
      return view('hello', ['message' => $message]);
    }
}
