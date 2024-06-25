<?php

namespace App\Http\Controllers;

use App\Models\article;
use App\Models\News;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class NewsArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function dataNews()
    {
        $news = Article::where('type', 'berita')->get();

        return view('dashboard-admin-article.data-news', compact('news'));
    }

    public function newsArticle()
    {
        return view('create_article', [
            'article' => 'dashboard-admin-news'
        ]);
    }

    public function detailNews($id)
    {
        $news = Article::find($id);
        return view('landing_page.main.news.news-article', compact('news'));
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
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
            $article->title = $request->event_news;
            $article->photo = 'images/' . $imageName;
            $article->admin_id = Auth::user()->id;
            $article->content = $request->headline_news;
            $article->detail_content = $request->detail_news;
            $article->type = $request->type;
            $article->save();

            return redirect('/data/berita
            ')->with('status', 'Berita Pengumuman Ditambahkan');
        }
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
    public function edit(string $id)
    {
        //
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
