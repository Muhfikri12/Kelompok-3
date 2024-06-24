<?php

namespace App\Http\Controllers;

use App\Models\Jabatan;
use App\Models\PerangkatDesa;
use App\Models\StructureOrg;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class KasiController extends Controller
{
     /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('structure.kasi.index', [
            'title' => "Struktur Organisasi Desa",
            'results' => StructureOrg::where('type','kasi')->get(),

        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('structure.kasi.create', [
            'title' => "Buat Data",
            'positions' => StructureOrg::all(),
            'staf' => PerangkatDesa::whereHas('position', function($q) {
                $q->where('type','Kasi');
            })->get(),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $record = StructureOrg::firstOrNew([
            'staff_id' => $request->staff_id,
            'name' => $request->name,
            'type' => "Kasi",
        ]);
        $record->parent_id = $request->parent_id;
        $record->save();

        Alert::success('success', "Data Berhasil Dibuat");
        return redirect()->route('kasi.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(StructureOrg $kasi)
    {
        return view('structure.kasi.show', [
            'title' => "Lihat Data",
            'positions' => Jabatan::all(),
            'record' => $kasi,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(StructureOrg $kasi)
    {
        return view('structure.kasi.edit', [
            'title' => "Edit Data",
            'positions' => StructureOrg::whereIn('type',['Kades','Sekertaris','Kasi'])->get(),
            'staf' => PerangkatDesa::whereHas('position', function($q) {
                $q->where('type','Kasi');
            })->get(),
            'record' => $kasi
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, StructureOrg $kasi)
    {

        $kasi->update([
            "name" => $request->name,
            "type" => "Kasi",
            "staff_id" => $request->staff_id,
            "parent_id" => $request->parent_id,
        ]);

        Alert::success('success', "Data Berhasil Diubah");
        return redirect()->route('kasi.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(StructureOrg $kasi)
    {
        // dd($kasi->childs()->exists());

        if ($kasi->childs()->exists() == false) {
            $kasi->delete();
            Alert::success('success', "Data Berhasil dihapus");
            return redirect()->route('kasi.index');
        } else {
            Alert::error('error',"Data tidak bisa dihapus karena mempunyai data turunan");
            return redirect()->route('kasi.index');
        }
    }
}
