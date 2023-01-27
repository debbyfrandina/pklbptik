<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LaporanController;
use App\Http\Controllers\DataPemberdayaanController;
use App\Http\Controllers\DataPengembanganController;


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


//input
Route::get('/input-pemberdayaan', [DataPemberdayaanController::class, 'create']);
Route::post('/input-pemberdayaan/submit', [DataPemberdayaanController::class, 'store']);

Route::get('/input-tata-usaha', [LaporanController::class, 'create']);
Route::post('/input-tata-usaha/submit', [LaporanController::class, 'store']);

// Route::get('/input-tata-usaha', function () {
//     return view('input_admin',[
//         "title" => "Input Tata Usaha"
//     ]);
// });

Route::get('/input-pengembangan', function () {
    return view('input_pengembangan',[
        "title" => "Input Pengembangan"
    ]);
});


//data
Route::get('/data-pengembangan', [DataPengembanganController::class, 'data']);
// Route::get('/data-pemberdayaan', [DataPemberdayaanController::class, 'data']);
Route::get('/data-tata-usaha', [LaporanController::class, 'data']);


//form
Route::get('/form-pengembangan', [DataPengembanganController::class, 'form']);
Route::get('/form-pemberdayaan', [DataPemberdayaanController::class, 'form']);
Route::get('/form-tata-usaha', [LaporanController::class, 'form']);


// Route::get('/form-tata-usaha', function () {
//     return view('form_admin',[
//         "title" => "Form Tata Usaha"
//     ]);
// });

// Route::get('/input-form', function () {
//     return view('input',[
//         "title" => "Input_Form"
//     ]);
// });

// Route::get('/data', function () {
//     return view('data',[
//         "title" => "data"
//     ]);
// });


//login
Route::get('/login', [LoginController::class, 'index']);
Route::post('/login', [LoginController::class, 'authenticate']);
Route::get('/logout', [LoginController::class, 'logout']);

Route::get('/generate', function () {
    return view('generate',[
        "title" => "generate"
    ]);
});
