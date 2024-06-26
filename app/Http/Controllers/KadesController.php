<?php

namespace App\Http\Controllers;

use App\Http\Requests\StructureOrgRequest;
use App\Models\Jabatan;
use App\Models\PerangkatDesa;
use App\Models\StructureOrg;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class KadesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        return view('structure.kades.index', [
            'title' => "Tabel Struktur Organisasi Tingkat Kepala Desa",
            'results' => StructureOrg::where('type','kades')->get(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('structure.kades.create', [
            'title' => "Buat Data",
            'positions' => StructureOrg::all(),
            'staf' => PerangkatDesa::where('type','Kades')->get(),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

            StructureOrg::create([
            'name' => $request->name,
            'staff_id' => $request->staff_id,
        ]);

        Alert::success('success', "Data Berhasil Dibuat");
        return redirect()->route('kades.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(StructureOrg $kade)
    {
        return view('structure.kades.show', [
            'title' => "Lihat Data",
            'staf' => PerangkatDesa::where('type','Kades')->get(),
            'record' => $kade,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(StructureOrg $kade)
    {
        $type = $kade->type;

        return view('structure.kades.edit', [
            'title' => "Ubah Data",
            'positions' => PerangkatDesa::whereHas('position', function($q) use($type) {
                $q->where('type',$type);
            })->get(),
            'record' => $kade
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, StructureOrg $kade)
    {

        $kade->name = $request->name;
        $kade->staff_id = $request->staff_id;
        $kade->save();

        Alert::success('success', "Data Berhasil Diubah");
        return redirect()->route('kades.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(StructureOrg $kade)
    {
        // dd($kade->childs()->exists());

        if ($kade->childs()->exists() == false) {
            $kade->delete();
            Alert::success('success', "Data Berhasil dihapus");
            return redirect()->route('kades.index');
        } else {
            Alert::error('error',"Data tidak bisa dihapus karena mempunyai data turunan");
            return redirect()->route('kades.index');
        }
    }
}
