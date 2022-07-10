<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomerController;


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

// お問い合わせ入力ページ
Route::get('/', 'App\Http\Controllers\CustomerController@index')->name('contact');

// DB挿入
Route::post('/process', 'App\Http\Controllers\CustomerController@process')->name('process');

// 完了ページ
Route::get('/complete', 'App\Http\Controllers\CustomerController@complete')->name('complete');

// 一覧表示ページ
Route::get('/list', 'App\Http\Controllers\CustomerController@list')->name('list');
