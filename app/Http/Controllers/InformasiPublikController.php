<?php

namespace App\Http\Controllers;

use App\Models\InformasiPublik;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class InformasiPublikController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('informasi.index',[
            'title' => "Tabel Banner",
            'results' => InformasiPublik::all(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('informasi.create',[
            'title' => "Buat Informasi Baru ",
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $record = InformasiPublik::firstOrNew([
            "judul" => $request->judul,
        ]);
        $record->description = $request->description;
        $record->save();

        Alert::success('Success', 'Data Banner Berhasil dibuat');
        return redirect()->route('informasi.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(InformasiPublik $informasi)
    {
        return view('informasi.show',[
            'title' => "Lihat Informasi",
            "record" => $informasi,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(InformasiPublik $informasi)
    {
        return view('informasi.edit',[
            'title' => "Ubah Informasi",
            'record' => $informasi,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, InformasiPublik $informasi)
    {
        $informasi->update([
            "judul" => $request->judul,
            "description" => $request->description,
        ]);

        Alert::success('Success', 'Data Informasi Berhasil diubah   ');
        return redirect()->route('informasi.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(InformasiPublik $informasi)
    {
        $informasi->delete();
        Alert::success('Success', 'Data Informasi Berhasil dihapus');
        return redirect()->route('informasi.index');
    }
}
