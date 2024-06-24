<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

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

    public function store(Request $request)
    {
        $request->validate([
            // To validate user input to ensure that the phone number starts with a digit other than 0 or +62,
            'wa_link' => ['required', 'regex:/^[1-9]\d{9,14}$/']
        ], [
            'wa_link.regex' => 'Nomor telepon harus dimulai dengan angka selain 0 atau +62'
        ]);
        ProfileDesas::where('id', 1)->update([
            'about_us' => $request->about_us,
            'sejarah' => $request->sejarah,
            'content_visi' => $request->content_visi,
            'alamat' => $request->alamat,
            'content_misi' => $request->content_misi,
            'yt_link' => $request->yt_link,
            'fb_link' => $request->fb_link,
            'wa_link' => 'https://wa.me/+62' . $request->wa_link,
            'ig_link' => $request->ig_link,
        ]);
        Alert::success('Success', 'Profil Berhasil di Update');
        return redirect()->route('profile-desa.index');
    }
}
