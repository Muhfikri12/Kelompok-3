<?php

namespace App\Http\Controllers;

use App\Models\ProfileDesa;
use Illuminate\Http\Request;

class ProfileDesaControllera extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function visiMisi()
    {
        $visiMisi = ProfileDesa::all();
        return view('landing_page.main.visi_misi', compact('visiMisi'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
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
