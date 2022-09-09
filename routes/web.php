<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ThreadsController;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [ThreadsController::class, 'index']);

// Route::get('auth/login', [Auth\AuthController::class, 'getLogin']);
// Route::post('auth/login', [Auth\AuthController::class, 'postLogin']);
// Route::get('auth/login', [Auth\AuthController::class, 'postLogin']);

// // ログイン/ログアウト機能
// Route::get('auth/login', 'Auth\AuthController@getLogin'); // 追加
// Route::post('auth/login', 'Auth\AuthController@postLogin'); // 追加
// Route::get('auth/logout', 'Auth\AuthController@getLogout'); // 追加

// // ユーザー登録機能
// Route::get('auth/register', 'Auth\AuthController@getRegister'); // 追加
// Route::post('auth/register', 'Auth\AuthController@postRegister'); // 追加