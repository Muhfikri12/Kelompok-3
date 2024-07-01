<?php

namespace App\Http\Controllers;

use App\Http\Requests\BannerRequest;
use App\Http\Requests\BannerUpdateRequest;
use App\Models\Banner;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class BannerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('banner.index',[
            'title' => "Tabel Banner",
            'results' => Banner::orderBy('updated_at','desc')->get(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('banner.create',[
            'title' => "Buat Data Banner",
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(BannerRequest $request)
    {
        if ($request->hasFile('photo') == true) {
            // Ambil extensi file
            $extfile = $request->photo->getClientOriginalExtension();
            // Genereate nama file bersarakan request namam waktu dan $extension file
            $namaFile = $request->judul . "-" . time() . "." . $extfile;
            // Simpan Photo su Storage/app/uploads
            $request->photo->storeAs('public/banner/', $namaFile);
        } else {
            $namaFile = "banner-default.png";
        }

        $record = Banner::firstOrNew([
            "judul" => $request->judul,
            "description" => $request->description,
        ]);
        $record->photo = $namaFile;
        $record->save();

        Alert::success('Success', 'Data Banner Berhasil dibuat');
        return redirect()->route('banner.index');

    }

    /**
     * Display the specified resource.
     */
    public function show(Banner $banner)
    {
        return view('banner.show', [
            'title' => "Lihat Data Banner",
            'record' => $banner,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Banner $banner)
    {
        return view('banner.edit', [
            'title' => "Ubah Data Banner",
            'record' => $banner,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(BannerUpdateRequest $request, Banner $banner)
    {
        if ($request->hasFile('photo') == true) {
            // Ambil extensi file
            $extfile = $request->photo->getClientOriginalExtension();
            // Genereate nama file bersarakan request namam waktu dan $extension file
            $namaFile = $request->judul . "-" . time() . "." . $extfile;
            // Simpan Photo su Storage/app/uploads
            $request->photo->storeAs('public/banner/', $namaFile);
        } else {
            $namaFile = $request->photo;
        }

        if($request->type == "Aktif" && Banner::where('type',"Aktif")->count() >= 5) {
            Alert::error('error', 'Banner yang aktif hanya bisa 5 unit, Ubah data yang lain terlebih dahulu');
            return redirect()->route('banner.index');
        }

        $banner->update([
            "judul" => $request->judul,
            "description" => $request->description,
            "photo" => $namaFile,
            "type" => $request->type,
        ]);

        Alert::success('Success', 'Data Banner Berhasil diubah');
        return redirect()->route('banner.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Banner $banner)
    {
        $banner->delete();

        Alert::success('Success', 'Data Banner Berhasil dihapus');
        return redirect()->route('banner.index');
    }
}
