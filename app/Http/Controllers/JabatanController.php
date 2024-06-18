<?php

namespace App\Http\Controllers;

use App\Models\Jabatan;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class JabatanController extends Controller
{
    public function index()
    {
        return view('jabatan.index',[
            "title" => "Data Jabatan",
            "results" => Jabatan::orderBy('updated_at',"desc")->get(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('jabatan.create',[
            "title" => "Data Jabatan Baru",
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $record = Jabatan::firstOrNew([
            "nama" => $request->nama
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
    public function edit(Jabatan $jabatan)
    {
        return view('jabatan.edit',[
            "title" => "Edit Jabatan",
            'record' => $jabatan
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Jabatan $jabatan)
    {
        $jabatan->nama = $request->nama;
        $jabatan->description = $request->description;
        $jabatan->save();

        Alert::success('Success','Data Berhasil diubah');
        return redirect()->route('jabatan.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Jabatan $jabatan)
    {
        // dd($jabatan->demografis()->exists());
        if($jabatan->perangkats()->exists()) {
            Alert::error('Gagal','Data Gagal dihapus karena sudah digunakan di tabel lain');
            return redirect()->route('jabatan.index');
        } else {
            $jabatan->delete();
            Alert::success('Success','Data Berhasil dihapus');
            return redirect()->route('jabatan.index');
        }
    }
}
