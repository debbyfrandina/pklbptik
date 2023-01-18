<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('dashboard',[
        "title" => "dashboard"
    ]);
    
});

Route::get('/test', function () {
    return view('test',[
        "title" => "test"
    ]);
});

Route::get('/form', function () {
    return view('form',[
        "title" => "form"
    ]);
});
Route::get('/data', function () {
    return view('data',[
        "title" => "data"
    ]);
});
Route::get('/generate', function () {
    return view('generate',[
        "title" => "generate"
    ]);
});
