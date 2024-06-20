<?php

use App\Http\Controllers\BasicController;
use App\Http\Controllers\CategoryDemografiController;
use App\Http\Controllers\DemografiController;
use App\Http\Controllers\JabatanController;
use App\Http\Controllers\LandingPageController;
use App\Http\Controllers\NewsArticleController;
use App\Http\Controllers\PerangkatDesaController;
use App\Http\Controllers\ProfileDesaControllera;
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
Route::get('/data/demografi', [LandingPageController::class, 'demografi'])->name('data-demografi');

Route::get('/article', [articleController::class, 'article'])->name('article');
Route::post('/article', [articleController::class, 'store'])->name('article.store');
Route::get('/create/berita', [NewsArticleController::class, 'newsArticle'])->name('news');
Route::get('/create/acara', [articleController::class, 'event'])->name('event');

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/about', function () {
    return view('about');
})->name('about');

// Route::get('/article@db', [articleController::class, 'formCreate'])->name('formCreate');

Route::middleware('auth')->group(function () {
    Route::resource('basic', BasicController::class);
    Route::resource('demografi', DemografiController::class);
    Route::resource('category-demografi', CategoryDemografiController::class);
    Route::resource('users', UserController::class);
    Route::resource('perangkat', PerangkatDesaController::class);
    Route::resource('jabatan', JabatanController::class);
    Route::resource('tugas', TugasController::class);
    Route::get('/profile', 'ProfileController@index')->name('profile');
    Route::put('/profile', 'ProfileController@update')->name('profile.update');
});
