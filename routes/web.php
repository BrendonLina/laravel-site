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
    Route::get(uri: '/', action:'HomeController');
    Route::get(uri:'/produtos', action:'CategoriaController@index');
    Route::get(uri:'/produtos/{slug}', action:'CategoriaController@show');

    Route::get(uri: '/blog', action:'BlogController');

    Route::view(uri:'/sobre', view:'site.about.index');

    Route::get(uri:'/contato', action:'ContatoController@index');
    Route::post(uri:'/contato', action:'ContatoController@form');
});
