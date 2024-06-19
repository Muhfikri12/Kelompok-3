<?php

namespace App\Http\Controllers;

use App\ProfileDesas;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProfileDesa extends Controller
{
    //
    public function showAbout()
    {
        $data = ProfileDesas::all()->toArray();
        dd($data);
        return view('landing_page.about-us', compact('data'));
    }
    public function showVisiMisi()
    {
        $data = DB::table('profile_desas')->first();

        return view('landing_page.visi-misi');
    }
    public function showSejarah()
    {
        $data = DB::table('profile_desas')->first();

        return view('landing_page.sejarah');
    }
}
