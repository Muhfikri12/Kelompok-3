<?php

use App\Http\Controllers\BasicController;
use App\Http\Controllers\CategoryDemografi;
use App\Http\Controllers\CategoryDemografiController;
use App\Http\Controllers\DemografiController;
use App\Http\Controllers\JabatanController;
use App\Http\Controllers\PerangkatDesaController;
use App\Http\Controllers\TugasController;
use App\Http\Controllers\UserController;
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

Route::get('/', function () {
    return view('landing_page.index');
});

Route::get('/data/demografi', "LandingPageController@demografi")->name('data.demografi');
Route::get('/home', 'HomeController@index')->name('home');

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/blank', function () {
    return view('blank');
})->name('blank');

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
