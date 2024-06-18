<?php

namespace App\Http\Controllers;

use App\Models\Tugas;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class TugasController extends Controller
{
    public function index()
    {
        return view('jabatan.index',[
            "title" => "Data Tugas",
            "results" => Tugas::orderBy('updated_at',"desc")->get(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('jabatan.create',[
            "title" => "Buat Tugas Baru",
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $record = Tugas::firstOrNew([
            "name" => $request->name
        ]);
        $record->description = $request->description;
        $record->save();

        Alert::success('Success','Data Berhasil dibuat');
        return redirect()->route('jabatan.index');
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
    public function edit(Tugas $tugas)
    {
        return view('jabatan.edit',[
            "title" => "Edit Jabatan",
            'record' => $tugas
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Tugas $tugas)
    {
        $tugas->name = $request->name;
        $tugas->description = $request->description;
        $tugas->save();

        Alert::success('Success','Data Berhasil diubah');
        return redirect()->route('jabatan.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Tugas $tugas)
    {
        // dd($tugas->demografis()->exists());
        if($tugas->perangkats()->exists()) {
            Alert::error('Gagal','Data Gagal dihapus karena sudah digunakan di tabel lain');
            return redirect()->route('jabatan.index');
        } else {
            $tugas->delete();
            Alert::success('Success','Data Berhasil dihapus');
            return redirect()->route('jabatan.index');
        }
    }
}
