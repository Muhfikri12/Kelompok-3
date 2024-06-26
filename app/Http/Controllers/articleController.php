<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Article;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class articleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function article($id)
    {
        $articles = Article::find($id);
        $slide = Article::all()->take(3);
        $maxTextLength = 70;

        $currentDateTime = Carbon::now();

        $listArticle = Article::where('id', '!=', $id)
            ->where(function ($query) use ($currentDateTime) {
                $query->where('event_date', '>', $currentDateTime->toDateString())
                    ->orWhere(function ($query) use ($currentDateTime) {
                        $query->where('event_date', '=', $currentDateTime->toDateString())
                            ->where('event_time', '>', $currentDateTime->toTimeString());
                    });
            })
            ->orderBy('event_date', 'asc')
            ->orderBy('event_time', 'asc')
            ->take(3)
            ->get();

        $listNews = Article::where('id', '!=', $id)
            ->where('type', 'Berita')
            ->take(3)
            ->get();
        return view('landing_page.main.article.detail-article', compact('listNews', 'articles', 'slide', 'listArticle', 'maxTextLength'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function event()
    {
        return view('create_article', [
            'article' => 'article.create_article'
        ]);
    }

    public function dataEvent()
    {
        $articles = Article::where('type', 'pengumuman')->get();

        return view('dashboard-admin-article.dashboard-db-admin', [
            'article' => 'dashboard-admin-article'
        ], compact('articles'));
    }



    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        if ($request->hasFile('image_content')) {
            $image = $request->file('image_content');
            $imageName = time() . '-' . $image->hashName();
            $image->move(public_path('images'), $imageName);

            $article = new Article();
            $article->title = $request->event_article;
            $article->photo = 'images/' . $imageName;
            $article->admin_id = Auth::user()->id;
            $article->content = $request->headline_article;
            $article->detail_content = $request->detail_content;
            $article->event_time = $request->event_time;
            $article->event_date = $request->event_date;
            $article->place = $request->event_place;
            $article->type = $request->type;
            $article->save();

            return redirect('/data/acara
            ')->with('status', 'Article Pengumuman Ditambahkan');
        }



        // $article -> save();


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
    public function edit($id)
    {
        $articles = Article::findOrFail($id);
        // $articles->event_date = \Carbon\Carbon::parse($articles->event_date)->format('m-d-Y');
        return view('create_article', [
            'article' => 'article.edit_article'
        ], compact('articles'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
