<?php

namespace App\Http\Controllers;


use App\Models\Article;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class articleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function article()
    {
        $article = Article::first();
        return view('landing_page.main.article.detail-article', compact('article'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function event()
    {
        return view('create_article', [
            'article' => 'dashboard-admin-article'
        ]);
    }

    public function formCreate()
    {
        $articles = Article::all();

        return view('create_article', [
            'article' => 'dashboard-db-admin',

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
            $article->photo = 'image/' . $imageName;
            $article->admin_id = Auth::user()->id;
            $article->content = $request->headline_article;
            $article->detail_content = $request->detail_content;
            $article->event_time = $request->event_time;
            $article->event_date = $request->event_date;
            $article->place = $request->event_place;
            $article->save();

            return redirect('/data/article
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
