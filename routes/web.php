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

Route::get('/admin', function () {
    return view('dashboard_admin',[
        "title" => "dashboard_admin"
    ]);
});
Route::get('/pengembangan', function () {
    return view('dashboard_pgb',[
        "title" => "dashboard_pgb"
    ]);
});
Route::get('/pemberdayaan', function () {
    return view('dashboard_pbd',[
        "title" => "dashboard_pbd"
    ]);
});
Route::get('/pimpinan', function () {
    return view('dashboard_pimpinan',[
        "title" => "dashboard_pimpinan"
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
Route::get('/login', function () {
    return view('login',[
        "title" => "login"
    ]);
});
