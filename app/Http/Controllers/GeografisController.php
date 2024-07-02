<?php

namespace App\Http\Controllers;

use App\Models\Geografis;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class GeografisController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('geografis.index',[
            'title' => 'Data Geografis',
            'results' => Geografis::all(),
        ]);
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
    public function show(Geografis $geografi)
    {
        return view('geografis.show',[
            'title' => 'Data Geografis',
            'record' => $geografi,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Geografis $geografi)
    {
        return view('geografis.edit', [
            'title' => "Ubah Data Geografis",
            'record' => $geografi,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Geografis $geografi)
    {
        $geografi->update([
            "name" => $request->name,
            "koordinat" => $request->koordinat,
            "luas" => $request->luas,
            "utara" => $request->utara,
            "selatan" => $request->selatan,
            "timur" => $request->timur,
            "barat" => $request->barat,
            "description" => $request->description,
        ]);

        Alert::success('success','Data Berhasil dibuah');
        return redirect()->route('geografis.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Alert::error('error','Data gagal dihapus');
        return redirect()->route('geografis.index');
    }
}
