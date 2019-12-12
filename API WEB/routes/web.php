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

Route::get('/','ViewController@getAccueil');
Route::get('/prime', 'ViewController@getPrime');
Route::get('accueil', 'ViewController@getAccueil');
Route::get('/seed-it', 'ViewController@getUs');
Route::get('/seedit', 'ViewController@getUs');
Route::get('contact', 'ContactController@getForm');
Route::post('contact', 'ContactController@postForm');
Route::resource('post', 'PostController', ['except' => ['show', 'edit', 'update']]);
Route::resource('user', 'UserController');
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
Auth::routes(['verify' => true]);
Route::get('profile', function () {
    // Only verified users may enter...
})->middleware('verified');