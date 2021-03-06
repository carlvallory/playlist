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

//Route::get('/', function () {
//    return view('welcome');
//});

Route::get('/', 'PlaylistController@home');
Route::get('/playlist', 'PlaylistController@playlist');
Route::post('/add', 'PlaylistController@add');


Route::resource('temas', 'TemaController');
Route::resource('artists', 'ArtistController');
Route::resource('albums', 'AlbumController');
Route::resource('users', 'UserController')->middleware('auth');


Auth::routes();

Route::get('/home', 'HomeController@index');


Route::resource('playlists', 'PlaylistController');