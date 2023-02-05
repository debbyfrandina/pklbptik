<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Model;
use App\Http\Requests\StoreUserRequest;
use App\Http\Requests\UpdateUserRequest;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = User::join('jabatans', 'jabatan_id', '=', 'jabatans.id');

        if (request('keyword')){
            $user->where('users.nama', 'like', '%' . request('keyword') . '%')
            ->orWhere('email', 'like', '%' . request('keyword') . '%')
            ->orWhere('jabatans.nama', 'like', '%' . request('keyword') . '%');
        }

        return view('generate.list_akun',[
            "title" => "List Akun",
            "data" => $user->get(['users.*', 'jabatans.nama AS username'])
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('generate.input',[
            "title" => "Generate Akun"
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            "nama" => ['required', 'string'],
            "email" => ['required', 'string'],
            "password" => ['required', 'string'],
            "jabatan_id" => ['required', 'integer'],
        ]);
        
        // Set the generated password
        $validatedData['password'] = bcrypt($validatedData['password']);
        
        // Create user
        User::create($validatedData);

        return redirect('/list-akun')->with('succes', 'Data berhasil dimasukkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        $id = request('id');
        $user = User::find($id);
        return view('generate.edit',[
            "title" => "Edit Akun",
            'data' => $user,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        $validatedData = $request->validate([
            "nama" => ['required', 'string'],
            "email" => ['required', 'string'],
            "password" => ['required', 'string'],
            "jabatan_id" => ['required', 'integer'],
        ]);
        
        // Set the generated password
        $validatedData['password'] = bcrypt($validatedData['password']);
        
        // Create user
        User::update($validatedData);

        return redirect('/list-akun')->with('succes', 'Data berhasil dimasukkan');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        $id = request('id');
        User::destroy($id);
        return redirect('/list-akun')->with('success', 'Data berhasil dihapus');
    }
}
