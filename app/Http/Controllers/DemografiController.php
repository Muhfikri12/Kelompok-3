<?php

namespace App\Http\Controllers;

use App\Http\Requests\DemografiRequest;
use App\Models\CategoryDemografi;
use App\Models\Demografi;
use Illuminate\Http\Request;

class DemografiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('demografi.index',
        [
            'title' => "Tabel Demografi",
            'results' => Demografi::orderBy("updated_at","DESC")->get(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('demografi.create',[
            "title" => "Tambah Data",
            'category' => CategoryDemografi::all(),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(DemografiRequest $request)
    {
        Demografi::create([
            "tahun"      => $request->tahun,
            "keterangan"      => $request->keterangan,
            "kategori_id"  => $request->kategori_id,
            "total"     => $request->total,
            "satuan"      => $request->satuan,
        ]);

        return redirect()->route('demografi.index')->with('message', 'Data Berhasil ditambahkan!');

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
    public function edit(Demografi $demografi)
    {
        return view('demografi.edit',
        [
            'title' => "Ubah Data",
            'record' => $demografi,
            'category' => CategoryDemografi::all(),
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(DemografiRequest $request, Demografi $demografi)
    {
        $demografi->tahun = $request->tahun;
        $demografi->keterangan = $request->keterangan;
        $demografi->kategori_id = $request->kategori_id;
        $demografi->total = $request->total;
        $demografi->satuan = $request->satuan;
        $demografi->save();

        return redirect()->route('demografi.index')->with('message', 'Data Berhasil Diubah!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Demografi $demografi)
    {
        $demografi->delete();

        return redirect()->route('demografi.index')->with('message', 'Data Berhasil Dihapus!');
    }
}
