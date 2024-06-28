<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\ProfileDesas;
use App\Models\Article;
use App\Models\Jabatan;
use App\Models\Lembaga;
use App\Models\Demografi;
use App\Models\Geografis;
use App\Models\StructureOrg;
use Illuminate\Http\Request;
use App\Models\PerangkatDesa;


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
        return view('landing_page.tugas', compact('record'));
    }

    public function struktur()
    {
        $results = StructureOrg::where('type', 'kades')->first();
        // dd($results);

        return view('landing_page.struktur', [
            'result' => $results,
        ]);
    }

    public function lembaga()
    {
        $results = Lembaga::orderBy('type', 'ASC')->get()->groupBy('type');

        return view('landing_page.lembaga', [
            'results' => $results,
        ]);
    }

    public function landing_page()
    {
        $currentDateTime = Carbon::now();
        $data = ProfileDesas::first();

        // Step 1: Get the top post based on view_count
        $topPosts = Article::query()
            ->leftJoin('category_article', 'article.kategori_id', '=', 'category_article.id')
            ->select('article.id as article_id', 'article.*', 'category_article.id as category_id', 'category_article.*')
            ->orderBy('article.view_count', 'desc')
            ->orderBy('article.updated_at', 'desc')
            ->take(1)
            ->first(); // Using first() to get a single record

        // Check if $topPost exists, if not, get the latest article as a fallback
        if (!$topPosts) {
            $topPosts = Article::query()
                ->leftJoin('category_article', 'article.kategori_id', '=', 'category_article.id')
                ->select('article.id as article_id', 'article.*', 'category_article.id as category_id', 'category_article.*')
                ->orderBy('article.updated_at', 'desc')
                ->take(1)
                ->first();
        }

        // Step 2: Get posts with fewer views than $topPost, ordered by created_at
        $posts = Article::query()
            ->leftJoin('category_article', 'article.kategori_id', '=', 'category_article.id')
            ->select('article.id as article_id', 'article.*', 'category_article.id as category_id', 'category_article.*')
            ->where('article.view_count', '<', $topPosts->view_count)
            ->orderBy('article.created_at', 'desc')
            ->take(3)
            ->get();


        $newsNew = Article::query()
            ->leftJoin('category_article', 'article.kategori_id', '=', 'category_article.id')
            ->select('article.id as article_id', 'article.*', 'category_article.id as category_id', 'category_article.*')
            ->where('article.type', 'berita')
            ->orderBy('article.created_at', 'desc')
            ->take(5)->get();

        // Tranding Category

        $slide = Article::all()->take(3);
        $news = Article::where('type', 'Berita')
            ->orderBy('created_at', 'desc')
            ->take(2)
            ->get();

        $maxTextLength = 10;

        $article = Article::where('type', 'pengumuman')
            ->where(function ($query) use ($currentDateTime) {
                $query->where('event_date', '>', $currentDateTime->toDateString())
                    ->orWhere(function ($query) use ($currentDateTime) {
                        $query->where('event_date', '>=', $currentDateTime->toDateString())
                            ->where('event_time', '>=', $currentDateTime->toTimeString());
                    });
            })
            ->orderBy('event_date', 'asc')
            ->orderBy('event_time', 'asc')
            ->take(3)
            ->get();

        $staffWithPositions = PerangkatDesa::with('position')->orderBy('created_at', 'asc')->get();
        // dd($topPosts);

        return view('landing_page.index', compact('article', 'staffWithPositions', 'slide', 'data', 'maxTextLength', 'news', 'posts', 'topPosts', 'newsNew'));
    }
}
