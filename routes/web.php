<?php

use Illuminate\Support\Facades\Route;
// LoginController を使うことを明示
use App\Http\Controllers\LoginController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
/*
Route::get('/', function () {
    return view('welcome');
});
*/

/*
// laravelのテスト (http://localhost/lara_coffee/public/hello)
Route::get('/hello', function () {
    return 'hello';
});
// コントローラーテスト
Route::get('/test', 'App\Http\Controllers\TestController@index');
// ビューテスト
Route::get('/testHello', 'App\Http\Controllers\TestController@viewTest');
*/

//
Route::get('/', [LoginController::class, 'index']);
Route::get('/index', [LoginController::class, 'index']);
// form受け取り
Route::post('/login_check', [LoginController::class, 'loginCheck']);
Route::get('/login_check', [LoginController::class, 'modelTest']);
