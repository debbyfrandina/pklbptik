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
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('input_pengembangan', [
            "title" => "Input Pengembangan"
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
        // dd($request);
        // $validatedData = $request->validate([
        //     "nama_program" => ['required', 'string'],
        //     "nama_kegiatan" => ['required', 'string'],
        //     "nama_sub_kegiatan" => ['required', 'string'],
        //     "nama_sub_sub_kegiatan" => ['required', 'string'],
        //     "tanggal_mulai" => ['required', 'date'],
        //     "tanggal_selesai" => ['required', 'date'],
        //     "tempat_pelaksanaan" => ['required', 'string'],
        //     "jumlah_peserta" => ['required', 'integer'],
        //     "jumlah_produk" => ['required', 'integer'],
        // ]);

        // $validatedData['user_id'] = auth()->user()->id;

        // DataPengembangan::create($validatedData);

        $input = $request->all();
        if($request->hasFile('file_pengembangan')){
            // get original file name
            $fileName = $request->file('file_pengembangan')->getClientOriginalName();
            // upload file
            $request->file('file_pengembangan')->storeAs('public/pengembangan', $fileName);
            $input['file_pengembangan'] = $fileName;
        }

        $input['user_id'] = auth()->user()->id;
        
        DataPengembangan::create($input);
    

        return redirect('/form-pengembangan')->with('succes', 'Data berhasil dimasukkan');
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
