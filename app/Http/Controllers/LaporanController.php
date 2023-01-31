<?php

namespace App\Http\Controllers;

use App\Models\Laporan;
use App\Http\Controllers\Controller;
use Illuminate\Database\Eloquent\Model;
use App\Http\Requests\StoreLaporanRequest;
use App\Http\Requests\UpdateLaporanRequest;

class LaporanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function data()
    {
        $laporan = Laporan::join('users', 'user_id', '=', 'users.id');

        if (request('keyword')) {
            $laporan->where('users.nama', 'like', '%' . request('keyword') . '%')
            ->orWhere('laporans.nama', 'like', '%' . request('keyword') . '%')
            ->orWhere('tujuan', 'like', '%' . request('keyword') . '%')
            ->orWhere('outcome', 'like', '%' . request('keyword') . '%')
            ->orWhere('jumlah', 'like', '%' . request('keyword') . '%')
            ->orWhere('outcome', 'like', '%' . request('keyword') . '%');
        }

        return view('data_admin',[
            "title" => "Data Tata Usaha",
            "data" => $laporan->get(['laporans.*', 'users.nama AS username'])
        ]);
    }

    public function form()
    {
        $laporan = Laporan::where('user_id','=', auth()->user()->id);

        if (request('keyword')) {
            $laporan->Where('nama', 'like', '%' . request('keyword') . '%')
            ->orWhere('tujuan', 'like', '%' . request('keyword') . '%')
            ->orWhere('outcome', 'like', '%' . request('keyword') . '%')
            ->orWhere('jumlah', 'like', '%' . request('keyword') . '%')
            ->orWhere('outcome', 'like', '%' . request('keyword') . '%');
        }

        return view('form_admin',[
            "title" => "Form Tata Usaha",
            "data" => $laporan->get()
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
            "file_admin" => ['required'],
        ]);
        // Laporan::create($validatedData);
        // $laporan = Laporan::find($request->id);
        
        $input = $request->all();
        if($request->hasFile('file_admin')){
            // get original file name
            $fileName = $request->file('file_admin')->getClientOriginalName();
            // upload file
            $request->file('file_admin')->storeAs('public/admin', $fileName);
            $input['file_admin'] = $fileName;
        }

        $input['user_id'] = auth()->user()->id;
        
        Laporan::create($input);
        
        return redirect('/form-tata-usaha')->with('succes', 'Data berhasil dimasukkan');
        // $laporan = Laporan::find($id);
        // $laporan->update($input);
        // $input['file_admin'] = $laporan->file_admin;
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
       ///
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
        $id = request('id');
        Laporan::destroy($id);
        return redirect('/form-tata-usaha')->with('success', 'Data berhasil dihapus');
    }
    
    // public function destroy($id)
    // {
    //     $laporan = Laporans::find($id);

    //     $laporan->delete();

    //     return redirect('/form-tata-usaha')->with('success', 'Data berhasil dihapus');
    // }
}
