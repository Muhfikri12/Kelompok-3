<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\News;
// use App\Models\article;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;

class NewsArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function dataNews($id)
    {
        $news = Article::query()
            ->leftJoin('category_article', 'article.kategori_id', '=', 'category_article.id')
            ->select('article.id as article_id', 'article.*', 'category_article.id as category_id', 'category_article.*')
            ->where('type', 'berita')->get();
        return view('dashboard-admin-article.news.data_news', compact('news'));
    }

    public function newsArticle()
    {

        return view('create_article', [
            'article' => 'news.create_news'
        ]);
    }

    public function draftArticle()
    {

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
            ->where('article.view_count', '<=', $topPosts->view_count)
            ->orderBy('article.created_at', 'desc')
            ->get();

        return view('landing_page.main.news.daftar-news', compact('topPosts', 'posts'));
    }

    public function detailNews($id)
    {
        $news = Article::findOrFail($id);
        $news->update([
            'view_count' => $news->view_count + 1
        ]);
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

        $listNews = Article::query()
            ->leftJoin('category_article', 'article.kategori_id', '=', 'category_article.id')
            ->select('article.id as article_id', 'article.*', 'category_article.id as category_id', 'category_article.*')
            ->where('article.id', '!=', $id)
            ->where('article.type', 'Berita')
            // ->take(3)
            ->get();
        return view('landing_page.main.news.detail-news', compact('news', 'listArticle', 'listNews'));
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
        $news = Article::findOrFail($id);
        return view('create_article', [
            'article' => 'news.view_news'
        ], compact('news'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $news = Article::findOrFail($id);
        return view('create_article', [
            'article' => 'news.edit_news'
        ], compact('news'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $news = Article::findOrFail($id);

        if (!$news) {
            return response()->json(['error' => 'News not found'], 404);
        }

        // Check if 'image_content' is present in the request
        if ($request->hasFile('image_content')) {
            // Delete the old image if it exists
            if ($news->photo && file_exists(public_path($news->photo))) {
                unlink(public_path($news->photo));
            }

            // Handle the new image upload
            $image = $request->file('image_content');
            $imageName = time() . '-' . $image->getClientOriginalName();
            $image->move(public_path('images'), $imageName);

            // Update the image path
            $news->photo = 'images/' . $imageName;
        }

        $news->title = $request->event_article;
        $news->admin_id = Auth::user()->id;
        $news->content = $request->headline_news;
        $news->type = $request->type;
        $news->detail_content = $request->detail_content;

        $news->save();


        return redirect()->route('data.news')->with('status', 'Berita Berhasil Diubah');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(News $news, $id)
    {
        $news = Article::findOrFail($id);
        $news->delete();
        Alert::success('Success', 'Data Berhasil dihapus');
        return redirect()->route('data.news');
    }
}
