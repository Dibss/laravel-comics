<?php

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

// PAGINA PRINCIPALE MOMENTANEA
Route::get('/', function () {

    $comics = config('comics');

    return view('comics.comics', ['comics' => $comics]);
    
})->name('comics');

Route::get('/comics/{id}', function ($id) {

    $comics = config('comics');

    if (!is_numeric($id) && $id > count($comics)) {
        abort(404);
    } else {
        $comic = $comics[$id];
        return view('comics.partials.comic', ['comic' => $comic]);
    }

})->name('comic');

Route::get('/characters', function () {

    return view('characters');
    
})->name('characters');


Route::get('/movies', function () {

    return view('movies');
    
})->name('movies');

Route::get('/tv', function () {

    return view('tv');
    
})->name('tv');

Route::get('/games', function () {

    return view('games');
    
})->name('games');

Route::get('/collectibles', function () {

    return view('collectibles');
    
})->name('collectibles');

Route::get('/videos', function () {

    return view('videos');
    
})->name('videos');

Route::get('/fans', function () {

    return view('fans');
    
})->name('fans');

Route::get('/news', function () {

    return view('news');
    
})->name('news');