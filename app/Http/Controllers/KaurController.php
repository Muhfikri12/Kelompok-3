<?php

namespace App\Http\Controllers;

use App\Models\Jabatan;
use App\Models\PerangkatDesa;
use App\Models\StructureOrg;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class KaurController extends Controller
{
     /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('structure.kaur.index', [
            'title' => "Struktur Organisasi Desa",
            'results' => StructureOrg::where('type','kaur')->get(),
            'staf' => PerangkatDesa::whereHas('position', function($q) {
                $q->where('type','Sekertaris');
            })->get(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('structure.kaur.create', [
            'title' => "Buat Data",
            'positions' => StructureOrg::WhereIn('type',["kades","sekertaris","kaur"])->get(),
            'staf' => PerangkatDesa::whereHas('position', function($q) {
                $q->where('type','Kaur');
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
            'type' => "Kaur",
        ]);
        $record->parent_id = $request->parent_id;
        $record->save();

        Alert::success('success', "Data Berhasil Dibuat");
        return redirect()->route('kaur.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(StructureOrg $kaur)
    {
        return view('structure.kaur.show', [
            'title' => "Lihat Data",
            'positions' => Jabatan::all(),
            'record' => $kaur,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(StructureOrg $kaur)
    {
        return view('structure.kaur.edit', [
            'title' => "Edit Data",
            'positions' => StructureOrg::whereIn('type',['Kades','Sekertaris','Kaur'])->get(),
            'staf' => PerangkatDesa::whereHas('position', function($q) {
                $q->where('type',"Kaur");
            })->get(),
            'record' => $kaur
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, StructureOrg $kaur)
    {

        $kaur->update([
            "name" => $request->name,
            "type" => "kaur",
            "staff_id" => $request->staff_id,
            "parent_id" => $request->parent_id,
        ]);

        Alert::success('success', "Data Berhasil Diubah");
        return redirect()->route('kaur.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(StructureOrg $kaur)
    {
        // dd($kaur->childs()->exists());

        if ($kaur->childs()->exists() == false) {
            $kaur->delete();
            Alert::success('success', "Data Berhasil dihapus");
            return redirect()->route('kaur.index');
        } else {
            Alert::error('error',"Data tidak bisa dihapus karena mempunyai data turunan");
            return redirect()->route('kaur.index');
        }
    }
}
