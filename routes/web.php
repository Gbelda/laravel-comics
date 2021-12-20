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

Route::get('/characters', function () {
    
        $indexes = config('db.indexes');
        
    return ('Characters Page');
}) ->name('characters');

Route::get('/movies', function () {
    
        $indexes = config('db.indexes');
        
    return ('Movies Page');
}) ->name('movies');

Route::get('/tv', function () {
    
        $indexes = config('db.indexes');
        
    return ('Tv Page');
}) ->name('tv');

Route::get('/games', function () {
    
        $indexes = config('db.indexes');
        
    return ('Games Page');
}) ->name('games');

Route::get('/collectibles', function () {
    
        $indexes = config('db.indexes');
        
    return ('Collectibles Page');
}) ->name('collectibles');

Route::get('/videos', function () {
    
        $indexes = config('db.indexes');
        
    return ('Videos Page');
}) ->name('videos');

Route::get('/fans', function () {
    
        $indexes = config('db.indexes');
        
    return ('Fans Page');
}) ->name('fans');

Route::get('/news', function () {
    
        $indexes = config('db.indexes');
        
    return ('News Page');
}) ->name('news');

Route::get('/shop', function () {
    
        $indexes = config('db.indexes');
        
    return ('Shop Page');
}) ->name('shop');

Route::get('comics/{id}', function ($id) {
    $indexes = config('db.indexes');
    $comics = config('comics');
    $subIndexes = config('db.subIndexes');

    //check if id is a number
    //check if value is >= 0
    //check if id < array.length
    $comic = $comics[$id];
    return view('comics.show', compact('comic', 'indexes', 'subIndexes'));
})->name('comic');