<?php

namespace App\Http\Controllers;

use App\Http\Requests\TugasRequest;
use App\Models\Jabatan;
use App\Models\Tugas;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class TugasController extends Controller
{
    public function index()
    {
        return view('tugas.index', [
            "title" => "Data Tugas",
            "results" => Tugas::orderBy('updated_at', "desc")->get(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('tugas.create', [
            "title" => "Buat Data",
            "positions" => Jabatan::all(),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(TugasRequest $request)
    {
        $record = Tugas::firstOrNew([
            "name" => $request->name,
            "position_id" => $request->position_id
        ]);
        $record->description = $request->description;
        $record->save();

        Alert::success('Success', 'Data Berhasil dibuat');
        return redirect()->route('tugas.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $record = Tugas::findOrFail($id);
        return view('tugas.show', [
            "title" => "Lihat Data",
            'record' => $record,
            "positions" => Jabatan::all(),
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $record = Tugas::findOrFail($id);
        return view('tugas.edit', [
            "title" => "Ubah Data",
            'record' => $record,
            "positions" => Jabatan::all(),
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(TugasRequest $request, $id)
    {
        $record = Tugas::findOrFail($id);
        $record->name = $request->name;
        $record->description = $request->description;
        $record->position_id = $request->position_id;
        $record->save();

        Alert::success('Success', 'Data Berhasil diubah');
        return redirect()->route('tugas.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $record = Tugas::findOrFail($id);

        $record->delete();
        Alert::success('Success', 'Data Berhasil dihapus');
        return redirect()->route('tugas.index');
    }
}
