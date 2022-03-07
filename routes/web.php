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
Route::namespace('Site')->group(function (){
    Route::get(uri:'/', action:'HomeController')->name(name:'site.home');
    Route::get(uri:'/produtos', action:'CategoriaController@index')->name('site.categoria');
    // Route::get(uri:'/produtos/{slug}', action:'CategoriaController@show')->name('site.produtos.categoria');

    Route::get(uri: '/blog', action:'BlogController')->name('site.blog');

    Route::view(uri:'/sobre', view:'site.about.index')->name('site.sobre');

    Route::get(uri:'/contato', action:'ContatoController@index')->name('site.contato');
    Route::post(uri:'/contato', action:'ContatoController@form')->name('site.contato.form');
});
