<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Demografi;
use Illuminate\Http\Request;


class LandingPageController extends Controller
{
    public function demografi()
    {
        $results = Demografi::all()->groupBy(function ($item) {
            return $item->category->nama;
        })->map(function ($group) {
            return $group->groupBy(function ($item) {
                return $item->tahun;
            });
        });

        return view('landing_page.demografi', [
            'results' => $results,
        ]);
    }

    public function landing_page()
    {
        $article = Article::orderBy('event_date', 'asc')->take(3)->get();

        return view('landing_page.index', compact('article'));
    }
}
