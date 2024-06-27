<?php

namespace App\Http\Controllers;

use App\Http\Requests\LembagaRequest;
use App\Models\Lembaga;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class LembagaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('lembaga.index',[
            'title' => 'Lembaga Desa',
            'results' => Lembaga::all(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('lembaga.create',[
            'title' => 'Buat Lembaga Desa',
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(LembagaRequest $request)
    {
        $record = Lembaga::firstOrNew([
            "name" => $request->name,
            "type" => $request->type,
        ]);
        $record->address = $request->address;
        $record->leader = $request->leader;
        $record->phone = $request->phone;
        $record->email = $request->email;
        $record->date = $request->date;
        $record->description = $request->description;
        $record->save();

        Alert::success('success','Data Berhasil dibuat.');
        return redirect()->route('lembaga.index');
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
    public function edit(Lembaga $lembaga)
    {
        return view('lembaga.edit',[
            'title' => 'Ubah Lembaga Desa',
            'record' => $lembaga
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(LembagaRequest $request, Lembaga $lembaga)
    {
        $lembaga->update([
            "name" => $request->name,
            "type" => $request->type,
            "phone" => $request->phone,
            "leader" => $request->leader,
            "email" => $request->email,
            "date" => $request->date,
            "description" => $request->description,
        ]);

        Alert::success('success','Data Berhasil diubah.');
        return redirect()->route('lembaga.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Lembaga $lembaga)
    {
        $lembaga->delete();
        Alert::success('success','Data Berhasil dihapus.');
        return redirect()->route('lembaga.index');

    }
}
