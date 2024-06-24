<?php

namespace App\Http\Controllers;

use App\Models\Jabatan;
use App\Models\PerangkatDesa;
use App\Models\StructureOrg;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class StaffController extends Controller
{
     /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('structure.staf.index', [
            'title' => "Struktur Organisasi Desa",
            'results' => StructureOrg::where('type','staf')->get(),

        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('structure.staf.create', [
            'title' => "Buat Data",
            'positions' => StructureOrg::WhereIn('type',["kades","sekertaris","Kaur"])->get(),
            'staf' => PerangkatDesa::whereHas('position', function($q) {
                $q->where('type','Staf');
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
            'type' => "Staf",
        ]);
        $record->parent_id = $request->parent_id;
        $record->save();

        Alert::success('success', "Data Berhasil Dibuat");
        return redirect()->route('staf.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(StructureOrg $staf)
    {
        return view('structure.staf.show', [
            'title' => "Lihat Data",
            'positions' => Jabatan::all(),
            'record' => $staf,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(StructureOrg $staf)
    {
        return view('structure.staf.edit', [
            'title' => "Edit Data",
            'positions' => StructureOrg::whereIn('type',['Kades','Sekertaris',"Kaur"])->get(),
            'staf' => PerangkatDesa::whereHas('position', function($q) {
                $q->where('type','Staf');
            })->get(),
            'record' => $staf
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, StructureOrg $staf)
    {
        $staf->update([
            "name" => $request->name,
            "type" => "Staf",
            "staff_id" => $request->staff_id,
            "parent_id" => $request->parent_id,
        ]);

        Alert::success('success', "Data Berhasil Diubah");
        return redirect()->route('staf.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(StructureOrg $staf)
    {
        // dd($staf->childs()->exists());

        if ($staf->childs()->exists() == false) {
            $staf->delete();
            Alert::success('success', "Data Berhasil dihapus");
            return redirect()->route('staf.index');
        } else {
            Alert::error('error',"Data tidak bisa dihapus karena mempunyai data turunan");
            return redirect()->route('staf.index');
        }
    }
}
