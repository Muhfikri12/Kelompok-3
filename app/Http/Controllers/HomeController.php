<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\News;
use App\Models\PerangkatDesa;
use App\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $users = User::count();
        $petugas = PerangkatDesa::count();
        $article = Article::where('type', 'pengumuman')->count();
        $news = News::where('type', 'berita')->count();


        $widget = [
            'users' => $users,
            'petugas' => $petugas,
            'article' => $article,
            'news' => $news,
            //...
        ];

        return view('home', compact('widget'));
    }
}
