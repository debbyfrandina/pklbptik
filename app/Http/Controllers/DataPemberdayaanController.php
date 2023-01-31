<?php

namespace App\Http\Controllers;

use App\Models\DataPemberdayaan;
use App\Http\Requests\StoreDataPemberdayaanRequest;
use App\Http\Requests\UpdateDataPemberdayaanRequest;
use App\Http\Controllers\Controller;

class DataPemberdayaanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function data()
    {
        $data_pemberdayaan = DataPemberdayaan::join('users', 'user_id', '=', 'users.id');

        if (request('keyword')) {
            $data_pemberdayaan->where('nama', 'like', '%' . request('keyword') . '%')
            ->orwhere('nama_program', 'like', '%' . request('keyword') . '%')
            ->orWhere('tujuan', 'like', '%' . request('keyword') . '%')
            ->orWhere('outcome', 'like', '%' . request('keyword') . '%')
            ->orWhere('tanggal_pelaksanaan', 'like', '%' . request('keyword') . '%')
            ->orWhere('tempat_pelaksanaan', 'like', '%' . request('keyword') . '%')
            ->orWhere('jumlah_peserta', 'like', '%' . request('keyword') . '%')
            ->orWhere('jumlah_sekolah', 'like', '%' . request('keyword') . '%');
        }

        return view('data_pemberdayaan',[
            "title" => "Data Pemberdayaan",
            "data" => $data_pemberdayaan->get(['data_pemberdayaans.*', 'users.nama AS username'])
        ]);
    }

    public function form()
    {
        $data_pemberdayaan = DataPemberdayaan::where('user_id','=', auth()->user()->id);

        if (request('keyword')) {
            $data_pemberdayaan->where('nama_program', 'like', '%' . request('keyword') . '%')
            ->orWhere('tujuan', 'like', '%' . request('keyword') . '%')
            ->orWhere('outcome', 'like', '%' . request('keyword') . '%')
            ->orWhere('tanggal_pelaksanaan', 'like', '%' . request('keyword') . '%')
            ->orWhere('tempat_pelaksanaan', 'like', '%' . request('keyword') . '%')
            ->orWhere('jumlah_peserta', 'like', '%' . request('keyword') . '%')
            ->orWhere('jumlah_sekolah', 'like', '%' . request('keyword') . '%');
        }

        return view('form_pemberdayaan',[
            "title" => "Form Pemberdayaan",
            "data" => $data_pemberdayaan->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('input_pemberdayaan',[
            "title" => "Input Pemberdayaan"
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreDataPemberdayaanRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreDataPemberdayaanRequest $request)
    {
        // $validatedData = $request->validate([
        //     "nama_program" => ['required', 'string'],
        //     "tujuan" => ['required', 'string'],
        //     "outcome" => ['required', 'string'],
        //     "tanggal_pelaksanaan" => ['required', 'date'],
        //     "tempat_pelaksanaan" => ['required', 'string'],
        //     "jumlah_peserta" => ['required', 'integer'],
        //     "jumlah_sekolah" => ['required', 'integer'],
        // ]);

        // $validatedData['user_id'] = auth()->user()->id;

        // DataPemberdayaan::create($validatedData);

        $input = $request->all();
        if($request->hasFile('file_pemberdayaan')){
            // get original file name
            $fileName = $request->file('file_pemberdayaan')->getClientOriginalName();
            // upload file
            $request->file('file_pemberdayaan')->storeAs('public/pemberdayaan', $fileName);
            $input['file_pemberdayaan'] = $fileName;
        }

        $input['user_id'] = auth()->user()->id;
        
        DataPemberdayaan::create($input);
    

        return redirect('/form-pemberdayaan')->with('success', 'Data berhasil dimasukkan');
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
