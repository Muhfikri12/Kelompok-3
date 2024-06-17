<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class UserController extends Controller
{

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('users.index',[
            "title" => "Data Pengguna",
            "results" => User::all(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('users.create',[
            "title" => "Buat Data User"
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Ambil extensi file
        $extfile = $request->photo->getClientOriginalExtension();
        // Genereate nama file bersarakan request namam waktu dan $extension file
        $namaFile = $request->name . "-" . time() . "." . $extfile;
        // Simpan Photo su Storage/app/uploads
        $path = $request->photo->storeAs('public',$namaFile);

        dd($path);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
