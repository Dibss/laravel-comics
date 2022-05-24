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

    $comics = Config::get('comics');

    return view('comics.comics', $comics);
    
})->name('comics');

// PARTIALS COMICS
Route::get('/comics/action-comics-1000-the-deluxe-edition', function() {

    return view('comics.partials.action-comics_1000-de');

})->name('action-comics');

Route::get('/comics/american-vampire-1976-1', function() {

    return view('comics.partials.american-vampire-1976_1');

})->name('american-vampire-1976_1');

Route::get('/comics/aquaman-4-underworld', function() {

    return view('comics.partials.aquaman_4-underworld');

})->name('aquaman_4-underworld');

Route::get('/comics/batgirl-1', function() {

    return view('comics.partials.batgirl_1');

})->name('batgirl_1');

Route::get('/comics/batman-56', function() {

    return view('comics.partials.batman_56');

})->name('batman_56');

Route::get('/comics/batman-beyond-1', function() {

    return view('comics.partials.batman-beyond_1');

})->name('batman-beyond_1');

Route::get('/comics/batman-superman-1', function() {

    return view('comics.partials.batman-superman_1');

})->name('batman-superman_1');

Route::get('/comics/batman-superman-annual-1', function() {

    return view('comics.partials.batman-superman-annual_1');

})->name('batman-superman-annual_1');

Route::get('/comics/batman-the-joker-war-zone-1', function() {

    return view('comics.partials.batman-the-joker-war-zone_1');

})->name('batman-the-joker-war-zone_1');

Route::get('/comics/batman-three-jokers-1', function() {

    return view('comics.partials.batman-three-jokers_1');

})->name('batman-three-jokers_1');

Route::get('/comics/batman-white-knight-presents-harley-quinn-1', function() {

    return view('comics.partials.batman-white-knight-presents-harley-quinn_1');

})->name('batman-white-knight-presents-harley-quinn_1');

Route::get('/comics/catwoman-1-copycats', function() {

    return view('comics.partials.catwoman_1-copycats');

})->name('catwoman_1-copycats');


// SUBPAGES

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