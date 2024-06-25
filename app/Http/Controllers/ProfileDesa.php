<?php

namespace App\Http\Controllers;

use App\ProfileDesas;

class ProfileDesa extends Controller
{
    //
    public function showAbout()
    {
        $data = ProfileDesas::first();
        return view('landing_page.about-us', compact('data'));
    }
    public function showVisiMisi()
    {
        $data = ProfileDesas::first();
        return view('landing_page.visi-misi', compact('data'));
    }
    public function showSejarah()
    {
        $data = ProfileDesas::first();
        return view('landing_page.sejarah', compact('data'));
    }

    public function index()
    {
        $data = ProfileDesas::first();
        return view('landing_page.dashboard-admin.index', compact('data'));
    }
}
