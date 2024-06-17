<?php

namespace App\Http\Controllers;

use App\Http\Requests\PerangkatDesaRequest;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use RealRashid\SweetAlert\Facades\Alert;

class PerangkatDesaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('perangkat.index', [
            "title" => "Data Perangkat Desa",
            "results" => User::all(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('perangkat.create', [
            "title" => "Buat Data Baru"
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(PerangkatDesaRequest $request)
    {
        // Ambil extensi file
        $extfile = $request->photo->getClientOriginalExtension();
        // Genereate nama file bersarakan request namam waktu dan $extension file
        $namaFile = $request->name . "-" . time() . "." . $extfile;
        // Simpan Photo su Storage/app/uploads
        $path = $request->photo->storeAs('public', $namaFile);

        User::create([
            "name" => $request->name,
            "gender" => $request->gender,
            "email" => $request->email,
            "nip" => $request->nip,
            "jabatan" => $request->jabatan,
            "status" => $request->status,
            "address" => $request->address,
            "photo" => $namaFile
        ]);

        Alert::success('Success', 'Data Berhasil dibuat');
        return redirect()->route('perangkat.index');
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
    public function edit(User $perangkat)
    {
        return view('perangkat.edit', [
            'title' => "Ubah Data",
            'record' => $perangkat
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(PerangkatDesaRequest $request, User $perangkat)
    {

        // Cek jika foto null
        $photo = $request->photo ? $request->photo : $perangkat->photo;

        // dd(Storage::disk('public')->exists($photo));
        // if(public_path('/public/'.$request->photo))


        if (Storage::disk('public')->exists($photo) == false) {
            // return 1;
            // Delete Jiga File diganti
            $path = public_path('/public/' . $perangkat->photo);
            Storage::disk('public')->delete($path);

            // Simpan Gambar
            // Ambil extensi file
            $extfile = $photo->getClientOriginalExtension();
            // Genereate nama file bersarakan request namam waktu dan $extension file
            $namaFile = $request->name . "-" . time() . "." . $extfile;
            // Simpan Photo su Storage/app/uploads
            $path = $request->photo->storeAs('public', $namaFile);

            $perangkat->update([
                "name" => $request->name,
                "gender" => $request->gender,
                "email" => $request->email,
                "nip" => $request->nip,
                "jabatan" => $request->jabatan,
                "status" => $request->status,
                "address" => $request->address,
                "photo" => $namaFile
            ]);
        } else {
            // return 0;
            $perangkat->update([
                "name" => $request->name,
                "gender" => $request->gender,
                "email" => $request->email,
                "nip" => $request->nip,
                "jabatan" => $request->jabatan,
                "status" => $request->status,
                "address" => $request->address,
                "photo" => $perangkat->photo
            ]);
        }

        Alert::success('Success','Data Berhasil diubah');
        return redirect()->route('perangkat.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $perangkat)
    {
        $perangkat->delete();

        Alert::success('Success','Data Berhasil dihapus');
        return redirect()->route('perangkat.index');
    }
}
