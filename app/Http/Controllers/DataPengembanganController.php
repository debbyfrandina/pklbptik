<?php

namespace App\Http\Controllers;

use App\Models\DataPengembangan;
use App\Http\Requests\StoreDataPengembanganRequest;
use App\Http\Requests\UpdateDataPengembanganRequest;
use App\Http\Controllers\Controller;

class DataPengembanganController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function data()
    {
        $data_pengembangan = DataPengembangan::all();

        return view('data_pengembangan',[
            "title" => "Data Pengembangan",
            "data" => $data_pengembangan
        ]);
    }

    public function form()
    {
        $data_pengembangan = DataPengembangan::where('user_id','=', auth()->user()->id)->get();

        return view('form_pengembangan',[
            "title" => "Form Pengembangan",
            "data" => $data_pengembangan
        ]);
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreDataPengembanganRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreDataPengembanganRequest $request)
    {
        return view('input_pemberdayaan',[
            "title" => "Input Pemberdayaan"
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\DataPengembangan  $dataPengembangan
     * @return \Illuminate\Http\Response
     */
    public function show(DataPengembangan $dataPengembangan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\DataPengembangan  $dataPengembangan
     * @return \Illuminate\Http\Response
     */
    public function edit(DataPengembangan $dataPengembangan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateDataPengembanganRequest  $request
     * @param  \App\Models\DataPengembangan  $dataPengembangan
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateDataPengembanganRequest $request, DataPengembangan $dataPengembangan)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\DataPengembangan  $dataPengembangan
     * @return \Illuminate\Http\Response
     */
    public function destroy(DataPengembangan $dataPengembangan)
    {
        //
    }
}
