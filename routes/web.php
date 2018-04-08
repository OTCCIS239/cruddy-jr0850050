<?php

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
    return view('welcome');
})->name('home');

Route::resource('dice', 'DiceController');
Route::resource('figurine', 'FigurineController');
Route::resource('advbooks', 'AdventureBookController');
Route::resource('clothing', 'ClothingController');
Route::resource('stickers', 'StickerController');