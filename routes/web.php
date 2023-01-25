<?php

use Illuminate\Support\Facades\Route;
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

Route::get('/form-pemberdayaan', function () {
    return view('form_pemberdayaan',[
        "title" => "form pemberdayaan"
    ]);
});

Route::get('/input-form', function () {
    return view('input',[
        "title" => "Input_Form"
    ]);
});

Route::get('/data', function () {
    return view('data',[
        "title" => "data"
    ]);
});

Route::get('/data-pemberdayaan', function () {
    return view('data_pemberdayaan',[
        "title" => "data pemberdayaan"
    ]);
});

Route::get('/generate', function () {
    return view('generate',[
        "title" => "generate"
    ]);
});
Route::get('/login', [LoginController::class, 'index']);
Route::post('/login', [LoginController::class, 'authenticate']);

Route::get('/logout', [LoginController::class, 'logout']);