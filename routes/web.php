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

Route::get('/', function () {
    
        $indexes = config('db.indexes');
        $miscs = config('db.miscs');
        $comics = config('comics');
        

    return view('welcome', compact('indexes', 'miscs', 'comics'));
});

Route::get('/comics', function () {
    
        $indexes = config('db.indexes');
        $miscs = config('db.miscs');
        $comics = config('comics');
        

    return view('welcome', compact('indexes', 'miscs', 'comics'));
}) ->name('comics');

    /*************************  ./COMICS/LANDING PAGE ***************************/

Route::get('/characters', function () {
    
        $indexes = config('db.indexes');
        
    return view('characters', compact('indexes'));
}) ->name('characters');

/*************************  ./CHARACTERS PAGE ***************************/

Route::get('/movies', function () {
    
        $indexes = config('db.indexes');
        
    return view('movies', compact('indexes'));
}) ->name('movies');

/*************************  ./MOVIES PAGE ***************************/

Route::get('/tv', function () {
    
        $indexes = config('db.indexes');
        
    return view('tv', compact('indexes'));
}) ->name('tv');

/*************************  ./TV PAGE ***************************/

Route::get('/games', function () {
    
        $indexes = config('db.indexes');
        
    return view('games', compact('indexes'));
}) ->name('games');

/*************************  ./GAMES PAGE ***************************/

Route::get('/collectibles', function () {
    
        $indexes = config('db.indexes');
        
    return view('collectibles', compact('indexes'));
}) ->name('collectibles');

/*************************  ./COLLECTIBLES PAGE ***************************/

Route::get('/videos', function () {
    
        $indexes = config('db.indexes');
        
    return view('videos', compact('indexes'));
}) ->name('videos');

/*************************  ./VIDEOS PAGE ***************************/

Route::get('/fans', function () {
    
        $indexes = config('db.indexes');
        
    return view('fans', compact('indexes'));
}) ->name('fans');

/*************************  ./FANS PAGE ***************************/

Route::get('/news', function () {
    
        $indexes = config('db.indexes');
        
    return view('news', compact('indexes'));
}) ->name('news');

/*************************  ./NEWS PAGE ***************************/

Route::get('/shop', function () {
    
        $indexes = config('db.indexes');
        
    return view('shop', compact('indexes'));
}) ->name('shop');

/*************************  ./SHOP PAGE ***************************/

Route::get('comics/{id}', function ($id) {
    $indexes = config('db.indexes');
    $comics = config('comics');
    $subIndexes = config('db.subIndexes');

    $comic = $comics[$id];
    return view('comics.show', compact('comic', 'indexes', 'subIndexes'));
})->name('comic');

/*************************  ./SPECIFIC COMIC PAGE ***************************/