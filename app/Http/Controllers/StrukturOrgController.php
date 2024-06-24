<?php

namespace App\Http\Controllers;

use App\Http\Requests\StructureOrgRequest;
use App\Models\Jabatan;
use App\Models\PerangkatDesa;
use App\Models\StructureOrg;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class StrukturOrgController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('structure.index', [
            'title' => "Struktur Organisasi Desa",
            'results' => StructureOrg::all(),

        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('structure.create', [
            'title' => "Buat Data",
            'positions' => StructureOrg::all(),
            'staf' => PerangkatDesa::all(),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StructureOrgRequest $request)
    {
        StructureOrg::create([
            'name' => $request->name,
            'parent_id' => $request->parent_id,
        ]);

        Alert::success('success', "Data Berhasil Dibuat");
        return redirect()->route('structure.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(StructureOrg $structure)
    {
        return view('structure.show', [
            'title' => "Data",
            'positions' => Jabatan::all(),
            'record' => $structure,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(StructureOrg $structure)
    {
        return view('structure.edit', [
            'title' => "Edit Data",
            'positions' => Jabatan::all(),
            'record' => $structure
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(StructureOrgRequest $request, StructureOrg $structure)
    {
        dd($request->all());


        $structure->name = $request->name;
        $structure->parent_id = $request->parent_id;
        $structure->save();

        Alert::success('success', "Data Berhasil Diubah");
        return redirect()->route('structure.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(StructureOrg $structure)
    {
        // dd($structure->childs()->exists());

        if ($structure->childs()->exists() == false) {
            $structure->delete();
            Alert::success('success', "Data Berhasil dihapus");
            return redirect()->route('structure.index');
        } else {
            Alert::error('error',"Data tidak bisa dihapus karena mempunyai data turunan");
            return redirect()->route('structure.index');
        }
    }
}
