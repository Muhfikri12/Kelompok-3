<?php

namespace App\Http\Controllers;

use App\Http\Requests\StructureOrgRequest;
use App\Models\Jabatan;
use App\Models\PerangkatDesa;
use App\Models\StructureOrg;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class KadusController extends Controller
{
     /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('structure.kadus.index', [
            'title' => "Tabel Struktur Organisasi Tingkat Kadus",
            'results' => StructureOrg::where('type','kadus')->get(),

        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('structure.kadus.create', [
            'title' => "Buat Data Kadus",
            'positions' => StructureOrg::all(),
            'staf' => PerangkatDesa::whereHas('position', function($q) {
                $q->where('type','Kadus');
            })->get(),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StructureOrgRequest $request)
    {

        $record = StructureOrg::firstOrNew([
            'staff_id' => $request->staff_id,
            'name' => $request->name,
            'type' => "Kadus",
        ]);
        $record->parent_id = $request->parent_id;
        $record->save();

        Alert::success('success', "Data Berhasil Dibuat");
        return redirect()->route('kadus.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(StructureOrg $kadu)
    {
        return view('structure.kadus.show', [
            'title' => "Lihat Data Kadus",
            'positions' => Jabatan::all(),
            'record' => $kadu,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(StructureOrg $kadu)
    {
        return view('structure.kadus.edit', [
            'title' => "Edit Data Kadus",
            'positions' => StructureOrg::whereIn('type',['Kades','Sekertaris','Kasi'])->get(),
            'staf' => PerangkatDesa::whereHas('position', function($q) {
                $q->where('type','Kadus');
            })->get(),
            'record' => $kadu
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(StructureOrgRequest $request, StructureOrg $kadu)
    {

        $kadu->update([
            "name" => $request->name,
            "type" => "Kadus",
            "staff_id" => $request->staff_id,
            "parent_id" => $request->parent_id,
        ]);

        Alert::success('success', "Data Berhasil Diubah");
        return redirect()->route('kadus.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(StructureOrg $kadu)
    {
        // dd($kadu->childs()->exists());

        if ($kadu->childs()->exists() == false) {
            $kadu->delete();
            Alert::success('success', "Data Berhasil dihapus");
            return redirect()->route('kadus.index');
        } else {
            Alert::error('error',"Data tidak bisa dihapus karena mempunyai data turunan");
            return redirect()->route('kadus.index');
        }
    }
}
