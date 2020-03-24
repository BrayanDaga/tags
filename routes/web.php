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
use App\Post;
use Conner\Tagging\Model\Tag;


Route::get('/','PostController@index')->name('post.index');

Route::post('guardar-post','PostController@store')->name('post.store');