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

Route::get('/', 'VenteController@index');
Route::resource('achat', 'VenteController');

Route::resource('panier', 'PanierController');

Route::view('blog', 'vente/blog');
Route::view('caisse', 'vente/checkout');
Route::view('contact', 'vente/contact');
Route::view('shop', 'vente/shop');

Route::resource('adm', 'ArticleController');

Route::resource('detail', 'DetailController');
Route::get('taille', 'DetailController@create2');
Route::post('detail/store2', 'DetailController@store2');
