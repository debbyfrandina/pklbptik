<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        //Chart Data Pemberdayaan
        //data siswa
        $dataSiswa = \DB::table('data_pemberdayaans')
            ->select(\DB::raw('MONTH(tanggal_pelaksanaan) as bulan'), \DB::raw('SUM(jumlah_peserta) as jumlah'))
            ->groupBy('bulan')
            ->get();

        $dataSiswa = $dataSiswa->keyBy('bulan');

        // Remove bulan from array
        $dataSiswa = $dataSiswa->map(function ($item, $key) {
            return $item->jumlah;
        });

        // Fill the array with 0 if the month is empty
        for ($i = 1; $i <= 12; $i++) {
            if (!isset($dataSiswa[$i])) {
                $dataSiswa[$i] = 0;
            }
        }
        $dataSiswa = $dataSiswa->sortKeys()->values();
    
        
        //data sekolah
        $dataSekolah = \DB::table('data_pemberdayaans')
            ->select(\DB::raw('MONTH(tanggal_pelaksanaan) as bulan'), \DB::raw('SUM(jumlah_sekolah) as jumlah'))
            ->groupBy('bulan')
            ->get();

        $dataSekolah = $dataSekolah->keyBy('bulan');
        // Remove bulan from array
        $dataSekolah = $dataSekolah->map(function ($item, $key) {
            return $item->jumlah;
        });
        // Fill the array with 0 if the month is empty
        for ($i = 1; $i <= 12; $i++) {
            if (!isset($dataSekolah[$i])) {
                $dataSekolah[$i] = 0;
            }
        }
        $dataSekolah = $dataSekolah->sortKeys()->values();

        //Chart Data Pengembanga
        //data siswa
        $dataPeserta = \DB::table('data_pengembangans')
            ->select(\DB::raw('MONTH(tanggal_mulai) as bulan'), \DB::raw('SUM(jumlah_peserta) as jumlah'))
            ->groupBy('bulan')
            ->get();

        $dataPeserta = $dataPeserta->keyBy('bulan');

        // Remove bulan from array
        $dataPeserta = $dataPeserta->map(function ($item, $key) {
            return $item->jumlah;
        });

        // Fill the array with 0 if the month is empty
        for ($i = 1; $i <= 12; $i++) {
            if (!isset($dataPeserta[$i])) {
                $dataPeserta[$i] = 0;
            }
        }
        $dataPeserta = $dataPeserta->sortKeys()->values();
        
        //data sekolah
        $dataProduk = \DB::table('data_pengembangans')
            ->select(\DB::raw('MONTH(tanggal_mulai) as bulan'), \DB::raw('SUM(jumlah_produk) as jumlah'))
            ->groupBy('bulan')
            ->get();

        $dataProduk = $dataProduk->keyBy('bulan');

        // Remove bulan from array
        $dataProduk = $dataProduk->map(function ($item, $key) {
            return $item->jumlah;
        });

        // Fill the array with 0 if the month is empty
        for ($i = 1; $i <= 12; $i++) {
            if (!isset($dataProduk[$i])) {
                $dataProduk[$i] = 0;
            }
        }
        $dataProduk = $dataProduk->sortKeys()->values();

        //Chart Data Total List tiap Seksi
        $dataPemberdayaan = \DB::table('data_pemberdayaans')->count();
        $dataPengembangan = \DB::table('data_pengembangans')->count();
        $laporan = \DB::table('laporans')->count();

        $dataList = [$dataPemberdayaan, $dataPengembangan, $laporan];


        //Total Siswa
        $dataSiswa = array_map('intval', $dataSiswa->toArray());

        $totalSiswa = array_sum($dataSiswa);
        
        
        // Total Sekolah

        
        return view('dashboard',[
            "dataSiswa" => $dataSiswa,
            "dataSekolah" => $dataSekolah,
            "dataPeserta" => $dataPeserta,
            "dataProduk" => $dataProduk,
            "dataList" => $dataList,
            "totalSiswa" => $totalSiswa,

            "title" => "dashboard"
        ]);
    }
}
