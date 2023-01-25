<?php

namespace App\Http\Controllers;

use App\Models\DataPemberdayaan;
use App\Http\Requests\StoreDataPemberdayaanRequest;
use App\Http\Requests\UpdateDataPemberdayaanRequest;

class DataPemberdayaanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreDataPemberdayaanRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreDataPemberdayaanRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\DataPemberdayaan  $dataPemberdayaan
     * @return \Illuminate\Http\Response
     */
    public function show(DataPemberdayaan $dataPemberdayaan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\DataPemberdayaan  $dataPemberdayaan
     * @return \Illuminate\Http\Response
     */
    public function edit(DataPemberdayaan $dataPemberdayaan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateDataPemberdayaanRequest  $request
     * @param  \App\Models\DataPemberdayaan  $dataPemberdayaan
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateDataPemberdayaanRequest $request, DataPemberdayaan $dataPemberdayaan)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\DataPemberdayaan  $dataPemberdayaan
     * @return \Illuminate\Http\Response
     */
    public function destroy(DataPemberdayaan $dataPemberdayaan)
    {
        //
    }
}
