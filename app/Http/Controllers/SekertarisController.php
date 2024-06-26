<?php

namespace App\Http\Controllers;

use App\Http\Requests\StructureOrgRequest;
use App\Models\Jabatan;
use App\Models\PerangkatDesa;
use App\Models\StructureOrg;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class SekertarisController extends Controller
{
   /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('structure.sekertaris.index', [
            'title' => "Tabel Struktur Organisasi Tingkat Sekertaris",
            'results' => StructureOrg::where('type','sekertaris')->get(),

        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('structure.sekertaris.create', [
            'title' => "Buat Data Sekertaris",
            'positions' => StructureOrg::WhereIn('type',["kades","sekertaris"])->get(),
            'staf' => PerangkatDesa::whereHas('position', function($q) {
                $q->where('type','Sekertaris');
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
            'type' => "Sekertaris",
        ]);
        $record->parent_id = $request->parent_id;
        $record->save();

        Alert::success('success', "Data Berhasil Dibuat");
        return redirect()->route('sekertaris.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(StructureOrg $sekertari)
    {
        return view('structure.sekertaris.show', [
            'title' => "Lihat Data Sekertaris",
            'positions' => Jabatan::all(),
            'staf' => PerangkatDesa::whereHas('position', function($q) {
                $q->where('type','Sekertaris');
            })->get(),
            'record' => $sekertari,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(StructureOrg $sekertari)
    {
        return view('structure.sekertaris.edit', [
            'title' => "Ubah Data Sekertaris",
            'positions' => StructureOrg::whereIn('type',['Kades','Sekertaris'])->get(),
            'staf' => PerangkatDesa::whereHas('position', function($q) {
                $q->where('type','Sekertaris');
            })->get(),
            'record' => $sekertari
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(StructureOrgRequest $request, StructureOrg $sekertari)
    {

    $sekertari->update([
        "name" => $request->name,
        "type" => "sekertaris",
        "staff_id" => $request->staff_id,
        "parent_id" => $request->parent_id,
    ]);
        Alert::success('success', "Data Berhasil Diubah");
        return redirect()->route('sekertaris.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(StructureOrg $sekertari)
    {
        // dd($sekertari->childs()->exists());

        if ($sekertari->childs()->exists() == false) {
            $sekertari->delete();
            Alert::success('success', "Data Berhasil dihapus");
            return redirect()->route('sekertaris.index');
        } else {
            Alert::error('error',"Data tidak bisa dihapus karena mempunyai data turunan");
            return redirect()->route('sekertaris.index');
        }
    }
}
