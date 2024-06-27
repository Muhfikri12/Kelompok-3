<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Article;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;

class articleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function article(Request $request, $id)
    {
        $articles = Article::find($id);
        $slide = Article::all()->take(3);
        $maxTextLength = 70;
        $page = $request->page ?? 1;
        $perPage = 5; // Banyak artikel per halaman
        $offset = ($page - 1) * $perPage;

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
            ->orderBy('created_at', 'desc')
            ->offset($offset)
            ->limit($perPage)
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
        $event = Article::findOrFail($id);
        return view('create_article', [
            'article' => 'article.view_article'
        ], compact('event'));
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
        $articles = Article::findOrFail($id);

        if (!$articles) {
            return response()->json(['error' => 'News not found'], 404);
        }

        // Check if 'image_content' is present in the request
        if ($request->hasFile('image_content')) {
            // Delete the old image if it exists
            if ($articles->photo && file_exists(public_path($articles->photo))) {
                unlink(public_path($articles->photo));
            }

            // Handle the new image upload
            $image = $request->file('image_content');
            $imageName = time() . '-' . $image->getClientOriginalName();
            $image->move(public_path('images'), $imageName);

            // Update the image path
            $articles->photo = 'images/' . $imageName;
        }

        $articles->title = $request->event_article;
        $articles->admin_id = Auth::user()->id;
        $articles->content = $request->headline_article;
        $articles->event_time = $request->event_time;
        $articles->event_date = $request->event_date;
        $articles->place = $request->event_place;
        $articles->type = $request->type;
        $articles->detail_content = $request->detail_content;

        $articles->save();


        return redirect()->route('data.event')->with('status', 'Berita Berhasil Diubah');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Article $article, string $id)
    {
        $article = Article::findOrFail($id);
        $article->delete();
        Alert::success('Success', 'Data Berhasil dihapus');
        return redirect()->route('data.event');
    }
}
