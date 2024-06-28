<?php

use App\Http\Controllers\BasicController;
use App\Http\Controllers\CategoryDemografiController;
use App\Http\Controllers\DemografiController;
use App\Http\Controllers\GeografisController;
use App\Http\Controllers\JabatanController;
use App\Http\Controllers\KadesController;
use App\Http\Controllers\KasiController;
use App\Http\Controllers\KaurController;
use App\Http\Controllers\LandingPageController;
use App\Http\Controllers\LembagaController;
use App\Http\Controllers\NewsArticleController;
use App\Http\Controllers\PerangkatDesaController;
use App\Http\Controllers\ProfileDesa;
use App\Http\Controllers\ProfileDesaControllera;
use App\Http\Controllers\SekertarisController;
use App\Http\Controllers\StaffController;
use App\Http\Controllers\StrukturOrgController;
use App\Http\Controllers\TugasController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\articleController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [LandingPageController::class, 'landing_page'])->name('landing_page');
Route::get('/daftar/artikel', [NewsArticleController::class, 'draftArticle'])->name('daftar.article');

Route::get('/acara/{id}', [articleController::class, 'article'])->name('article');
Route::get('/berita/{id}', [NewsArticleController::class, 'detailNews'])->name('news.article');

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/about', function () {
    return view('about');
})->name('about');
Route::middleware('auth')->group(function () {
    Route::resource('basic', BasicController::class);
    Route::resource('demografi', DemografiController::class);
    Route::resource('category-demografi', CategoryDemografiController::class);
    Route::resource('users', UserController::class);
    Route::resource('perangkat', PerangkatDesaController::class);
    Route::resource('jabatan', JabatanController::class);
    Route::resource('tugas', TugasController::class);

    Route::get('/profile-desa', [ProfileDesa::class, 'index'])->name('profile-desa');
    Route::resource('structure', StrukturOrgController::class);
    Route::resource('kades', KadesController::class);
    Route::resource('profile-desa', ProfileDesa::class);
    Route::resource('sekertaris', SekertarisController::class);
    Route::resource('kaur', KaurController::class);
    Route::resource('kasi', KasiController::class);
    Route::resource('staf', StaffController::class);
    Route::resource('geografis', GeografisController::class);
    Route::resource('lembaga', LembagaController::class);
    Route::get('/profile', 'ProfileController@index')->name('profile');
    Route::put('/profile', 'ProfileController@update')->name('profile.update');
    Route::get('/membuat/berita', [NewsArticleController::class, 'newsArticle'])->name('news');

    Route::get('/create/acara', [articleController::class, 'event'])->name('event');
    // article
    Route::get('/create/acara', [articleController::class, 'event'])->name('event');
    Route::post('/article', [articleController::class, 'store'])->name('article.store');
    Route::get('/data/acara', [articleController::class, 'dataEvent'])->name('data.event');
    Route::get('/acara/{id}/edit', [articleController::class, 'edit'])->name('article.edit');
    Route::put('/acara/{id}', [articleController::class, 'update'])->name('article.update');
    Route::get('/lihat/acara/{id}', [articleController::class, 'show'])->name('article.show');
    Route::get('/lihat/berita/{id}', [NewsArticleController::class, 'show'])->name('news.show');
    Route::delete('/acara/{id}', [articleController::class, 'destroy'])->name('article.destroy');
    Route::get('/data/berita', [NewsArticleController::class, 'dataNews'])->name('data.news');
    Route::post('/data/berita', [NewsArticleController::class, 'store'])->name('news.store');
    Route::get('/berita/{id}/edit', [NewsArticleController::class, 'edit'])->name('news.edit');
    Route::put('/berita/{id}', [NewsArticleController::class, 'update'])->name('news.update');
    Route::delete('/berita/{id}', [NewsArticleController::class, 'destroy'])->name('news.destroy');
});


Route::get('/basic/create/about-us', function () {
    return view('basic.create-about-us');
});

Route::get('/about-us', [ProfileDesa::class, 'showAbout'])->name('about-us');
Route::get('/visi-misi', [ProfileDesa::class, 'showVisiMisi'])->name('visi-misi');
Route::get('/sejarah', [ProfileDesa::class, 'showSejarah'])->name('sejarah');
Route::get('/data-demografi', "LandingPageController@demografi")->name('data-demografi');
Route::get('/data-geografi', "LandingPageController@geografi")->name('data-geografi');
Route::get('/data-lembaga', "LandingPageController@lembaga")->name('data-lembaga');
Route::get('/petugas', "LandingPageController@petugas")->name('petugas');
Route::get('/struktur', "LandingPageController@struktur")->name('struktur');
Route::get('/data-tugas/{id}', "LandingPageController@tugas")->name('data-tugas');



Route::get('/basic/create/about-us', function () {
    return view('basic.create-about-us');
});
