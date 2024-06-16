<?php

namespace App\Http\Controllers;

use App\Http\Requests\KategoriDemografiRequest;
use App\Models\CategoryDemografi;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;


class CategoryDemografiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('category_demografi.index',[
            "title" => "Data Kategori",
            "results" => CategoryDemografi::orderBy('updated_at',"desc")->get(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('category_demografi.create',[
            "title" => "Data Kategori Baru",
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(KategoriDemografiRequest $request)
    {
        $record = CategoryDemografi::firstOrNew([
            "nama" => $request->nama
        ]);
        $record->keterangan = $request->keterangan;
        $record->save();

        Alert::success('Success','Data Berhasil dibuat');
        return redirect()->route('category-demografi.index');
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
    public function edit(CategoryDemografi $categoryDemografi)
    {
        return view('category_demografi.edit',[
            "title" => "Edit Kategori",
            'record' => $categoryDemografi
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(KategoriDemografiRequest $request, CategoryDemografi $categoryDemografi)
    {
        $categoryDemografi->nama = $request->nama;
        $categoryDemografi->keterangan = $request->keterangan;
        $categoryDemografi->save();

        Alert::success('Success','Data Berhasil diubah');
        return redirect()->route('category-demografi.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(CategoryDemografi $categoryDemografi)
    {
        // dd($categoryDemografi->demografis()->exists());
        if($categoryDemografi->demografis()->exists()) {
            Alert::error('Gagal','Data Gagal dihapus karena sudah digunakan di tabel lain');
            return redirect()->route('category-demografi.index');
        } else {
            $categoryDemografi->delete();
            Alert::success('Success','Data Berhasil dihapus');
            return redirect()->route('category-demografi.index');
        }
    }

}
