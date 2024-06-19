<?php

use App\Http\Controllers\articleController;
use App\Http\Controllers\BasicController;
use App\Http\Controllers\LandingPageController;
use App\Http\Controllers\NewsArticleController;
use App\Http\Controllers\ProfileDesaControllera;
use App\Models\ProfileDesa;
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
Route::get('/article', [articleController::class, 'article'])->name('article');
Route::post('/article', [articleController::class, 'store'])->name('article.store');
Route::get('/createNews', [NewsArticleController::class, 'newsArticle'])->name('news');
Route::get('/createArticle', [articleController::class, 'event'])->name('event');

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/profile', 'ProfileController@index')->name('profile');
Route::put('/profile', 'ProfileController@update')->name('profile.update');

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/db-article', [articleController::class, 'formCreate'])->name('formCreate');
// Route::get('/article@db', [articleController::class, 'formCreate'])->name('formCreate');       

Route::middleware('auth')->group(function () {
    Route::resource('basic', BasicController::class);
});
