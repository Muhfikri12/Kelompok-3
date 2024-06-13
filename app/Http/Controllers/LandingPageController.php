<?php

namespace App\Http\Controllers;

use App\Models\Demografi;
use Illuminate\Http\Request;

class LandingPageController extends Controller
{
    public function demografi()
    {
        return view('landing_page.demografi',[
            "results" => Demografi::get(),
        ]);
    }
}
