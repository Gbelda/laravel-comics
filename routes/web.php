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
}) ->name('comics');



Route::get('comics/{id}', function ($id) {
    $indexes = config('db.indexes');
    $comics = config('comics');

    if (is_numeric($id)) {
        # code...
    }
    //check if id is a number
    //check if value is >= 0
    //check if id < array.length
    $comic = $comics[$id];
    return view('comics.show', compact('comic', 'indexes'));
})->name('comic');