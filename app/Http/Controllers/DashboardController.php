<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        
        $dataSiswa = [54, 67, 41, 55, 62, 45, 55, 73, 60, 76, 48, 79];
        $dataSekolah = [69, 66, 24, 48, 52, 51, 44, 53, 62, 79, 51, 68];

        return view('dashboard',[
            "dataSiswa" => $dataSiswa,
            "dataSekolah" => $dataSekolah,
            "title" => "dashboard"
        ]);
    }
}
