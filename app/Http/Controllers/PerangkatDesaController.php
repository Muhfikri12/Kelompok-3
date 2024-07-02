<?php

namespace App\Http\Controllers;

use App\Http\Requests\PerangkatDesaRequest;
use App\Models\Jabatan;
use App\Models\PerangkatDesa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use RealRashid\SweetAlert\Facades\Alert;

class PerangkatDesaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('perangkat.index', [
            "title" => "Tabel Petugas Desa",
            "results" => PerangkatDesa::orderBy('updated_at', 'desc')->get(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('perangkat.create', [
            "title" => "Buat Data Petugas",
            "positions" => Jabatan::all(),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(PerangkatDesaRequest $request)
    {

        if ($request->hasFile('photo') == true) {
            // Ambil extensi file
            $extfile = $request->photo->getClientOriginalExtension();
            // Genereate nama file bersarakan request namam waktu dan $extension file
            $namaFile = $request->name . "-" . time() . "." . $extfile;
            // Simpan Photo su Storage/app/uploads
            $request->photo->storeAs('public/petugas/', $namaFile);
        } else {
            $namaFile = "Asep Rohmat-1719281373.png";
        }

        $record = PerangkatDesa::firstOrNew([
            "name" => $request->name,
            "nip" => $request->nip,
        ]);
        $record->position_id = $request->position_id;
        $record->phone = $request->phone;
        $record->gender = $request->gender;
        $record->status = $request->status;
        $record->address = $request->address;
        $record->photo = $namaFile;
        $record->save();



        Alert::success('Success', 'Data Berhasil dibuat');
        return redirect()->route('perangkat.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(PerangkatDesa $perangkat)
    {
        return view('perangkat.show', [
            'title' => "Lihat Data Petugas",
            'record' => $perangkat,
            "positions" => Jabatan::all(),
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(PerangkatDesa $perangkat)
    {
        return view('perangkat.edit', [
            'title' => "Ubah Data Petugas",
            'record' => $perangkat,
            "positions" => Jabatan::all(),
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(PerangkatDesaRequest $request, PerangkatDesa $perangkat)
    {
        // dd($request->all());
        if ($request->hasFile('photo') == true) {
            // Ambil extensi file
            $extfile = $request->photo->getClientOriginalExtension();
            // Genereate nama file bersarakan request namam waktu dan $extension file
            $namaFile = $request->name . "-" . time() . "." . $extfile;
            // Simpan Photo su Storage/app/uploads
            $request->photo->storeAs('public/petugas/', $namaFile);
        } else {
            $namaFile = $perangkat->photo;
        }

        // dd($namaFile);
        $perangkat->update([
            "name" => $request->name,
            "gender" => $request->gender,
            "nip" => $request->nip,
            "position_id" => $request->position_id,
            "phone" => $request->phone,
            "status" => $request->status,
            "address" => $request->address,
            "photo" => $namaFile,
        ]);

        Alert::success('Success', 'Data Berhasil diubah');
        return redirect()->route('perangkat.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(PerangkatDesa $perangkat)
    {

        // dd($perangkat->struktur->exists());
        if($perangkat->struktur == true) {
            Alert::error('error', 'Data fagal dihapus, petugas masih aktif di struktur organisasi');
            return redirect()->route('perangkat.index');
        } else {
            $perangkat->delete();
            Alert::success('Success', 'Data Petugas Berhasil dihapus');
            return redirect()->route('perangkat.index');
        }
    }
}
