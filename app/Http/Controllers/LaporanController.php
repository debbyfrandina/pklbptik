<?php

namespace App\Http\Controllers;

use App\Models\Laporan;
use App\Http\Requests\StoreLaporanRequest;
use App\Http\Requests\UpdateLaporanRequest;
use App\Http\Controllers\Controller;

class LaporanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function data()
    {
        $laporan = Laporan::all();

        return view('data_admin',[
            "title" => "Data Tata Usaha",
            "data" => $laporan
        ]);
    
    }

    public function form()
    {
        $laporan = Laporan::where('user_id','=', auth()->user()->id)->get();

        return view('form_admin',[
            "title" => "Form Tata Usaha",
            "data" => $laporan
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('input_admin',[
            "title" => "Input Tata Usaha"
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreLaporanRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreLaporanRequest $request)
    {
        $validatedData = $request->validate([
            "nama" => ['required', 'string'],
            "tujuan" => ['required', 'string'],
            "outcome" => ['required', 'string'],
            "jumlah" => ['required', 'integer'],
            "file_admin" => ['required', 'string'],
        ]);

        $validatedData['user_id'] = auth()->user()->id;

        Laporan::create($validatedData);

        $input = $request->all();
        if($request->hasFile('file_admin')){
            // get original file name
            $fileName = $request->file('file_admin')->getClientOriginalName();
            // upload file
            $request->file('file_admin')->storeAs('public/admin', $fileName);
            $input['file_admin'] = $fileName;
        }
        // $laporan = Laporan::find($id);
        // $laporan->update($input);
        
        return redirect('/form-tata-usaha');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Laporan  $laporan
     * @return \Illuminate\Http\Response
     */
    public function show(Laporan $laporan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Laporan  $laporan
     * @return \Illuminate\Http\Response
     */
    public function edit(Laporan $laporan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateLaporanRequest  $request
     * @param  \App\Models\Laporan  $laporan
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateLaporanRequest $request, Laporan $laporan)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Laporan  $laporan
     * @return \Illuminate\Http\Response
     */
    public function destroy(Laporan $laporan)
    {
        //
    }
}
