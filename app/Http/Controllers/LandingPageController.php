<?php

namespace App\Http\Controllers;

use App\Models\Demografi;
use Illuminate\Http\Request;

class LandingPageController extends Controller
{
    public function demografi()
    {

        $results = Demografi::orderBy('kategori')->get();
        $result = $results->groupBy('kategori');

        // dd($result);
        return view('landing_page.demografi',[
            'results' => $result,
        ]);
    }
}
