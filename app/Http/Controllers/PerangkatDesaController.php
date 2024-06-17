<?php

namespace App\Http\Controllers;

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
        return view('perangkat.index',[
            "title" => "Data Perangkat Desa",
            "results" => User::all(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('perangkat.create',[
            "title" => "Buat Data Baru"
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
             // Ambil extensi file
             $extfile = $request->photo->getClientOriginalExtension();
             // Genereate nama file bersarakan request namam waktu dan $extension file
             $namaFile = $request->name . "-" . time() . "." . $extfile;
             // Simpan Photo su Storage/app/uploads
             $path = $request->photo->storeAs('public',$namaFile);

             User::create([
                "name" => $request->name,
                "gender" => $request->gender,
                "email" => $request->gender,
                "nip" => $request->nip,
                "jabatan" => $request->jabatan,
                "status" => $request->status,
                "address" => $request->address,
                "photo" => $namaFile
             ]);

             Alert::success('Success','Data Berhasil dibuat');
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
        return view('perangkat.edit',[
            'title' => "Ubah Data",
            'record' => $perangkat
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, User $perangkat)
    {

        $photo = $request->photo ? $request->photo : "File tidak diganti";

        // dd(Storage::disk('public')->exists($photo));
        // if(public_path('/public/'.$request->photo))
        if(Storage::disk('public')->exists($photo) == false) {
            // Delete Jiga File diganti
            $path = public_path('/public/'.$perangkat->photo);
            $aa = Storage::disk('public')->delete($path);
            dd($aa);


            // // Simpan Gambar
            // // Ambil extensi file
            // $extfile = $request->photo->getClientOriginalExtension();
            // // Genereate nama file bersarakan request namam waktu dan $extension file
            // $namaFile = $request->name . "-" . time() . "." . $extfile;
            // // Simpan Photo su Storage/app/uploads
            // $path = $request->photo->storeAs('public',$namaFile);

        }

        dd("TEST");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $perangkat)
    {
        $perangkat->delete();

        Alert::succes("Data Berhasil dihapus");
        return redirect()->route('perangkat.index');
    }
}
