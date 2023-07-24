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

    $comics = config('db.comics');
    $icons = config('db.icons');

    return view('home', compact('comics','icons'));

})->name('home');

Route::get('/products', function () {

    $comics = config('db.comics');


    return view('products.index', compact('comics'));

})->name('products');

Route::get('/products/{product}', function ($id) {

    $comics = config('db.comics');

    $product = $products[$id];

    return view('products.show', compact('product'));

});
