<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Demografi;
use App\Models\Geografis;
use App\Models\Lembaga;
use App\Models\PerangkatDesa;
use App\Models\StructureOrg;
use Carbon\Carbon;
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

    public function geografi()
    {
        $record = Geografis::first();

        return view('landing_page.geografi', [
            'record' => $record,
        ]);
    }

    public function petugas()
    {
        $results = PerangkatDesa::all();
        return view('landing_page.perangkat-desa', [
            'results' => $results,
        ]);
    }

    public function tugas($id)
    {
        $record = PerangkatDesa::find($id);
        return view('landing_page.tugas',compact('record'));
    }

    public function struktur()
    {
        $results = StructureOrg::where('type','kades')->first();
        // dd($results);

        return view('landing_page.struktur', [
            'result' => $results,
        ]);

    }

    public function lembaga()
    {
        $results = Lembaga::orderBy('type','ASC')->get()->groupBy('type');
        return view('landing_page.lembaga', [
            'results' => $results,
        ]);

    }

    public function landing_page()
    {
        $currentDateTime = Carbon::now();

        $slide = Article::all()->take(3);
        $article = Article::where(function ($query) use ($currentDateTime) {
            $query->where('event_date', '>', $currentDateTime->toDateString())
                ->orWhere(function ($query) use ($currentDateTime) {
                    $query->where('event_date', '=', $currentDateTime->toDateString())
                        ->where('event_time', '>', $currentDateTime->toTimeString());
                });
        })
            ->orderBy('event_date', 'asc')
            ->orderBy('event_time', 'asc')
            ->take(4)
            ->get();
        $staffWithPositions = PerangkatDesa::with('position')->orderBy('created_at', 'asc')->get();

        return view('landing_page.index', compact('article', 'staffWithPositions', 'slide'));
    }
}
