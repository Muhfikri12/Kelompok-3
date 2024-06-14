<?php

namespace App\Http\Controllers;

use App\Models\article;
use Illuminate\Http\Request;

class LandingPageController extends Controller
{
    public function landing_page()
    {
        $article = Article::first();

        return view ('landing_page.index', compact('article'));
    } 
}
