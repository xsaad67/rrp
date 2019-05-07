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

Route::get("/","PageController@index");
Auth::routes();


Route::get("/ar",'CrawlController@index');

Route::get('/posts/create','PostController@create');
Route::get('/posts/{post}/edit','PostController@edit');
Route::post('posts/{post}/update','PostController@update');
Route::post('posts/{id}/delete','PostController@destroy');

Route::post('/posts','PostController@store');
Route::get('/posts/{slug}','PostController@show');

Route::post('/comment/store', 'CommentController@store')->name('comment.add');
Route::post('/reply/store', 'CommentController@replyStore')->name('reply.add');

Route::get('/crawl','CrawlLinksController@index');
Route::get('/rand','CrawlController@randomUsers');
Route::get("/reddit",'CrawlController@create');
Route::resource('/templates','MemeTemplatesController');
Route::get('/download','MemeController@downloadFile');
Route::get('/get-template','MemeTemplatesController@chooseTemplate');
Route::get('/load-templates','MemeTemplatesController@loadTemplates');

Route::post('/upvote','FavoriteController@upvote');
Route::post('/downvote','FavoriteController@downvote');
Route::get('/favorite','FavoriteController@favorite');

Route::get("/search","SearchController@index");

Route::get('/meme/create/{slug?}', 'MemeController@create');
Route::post('/meme/store','MemeController@store');


Route::get('/word','WordController@index');
Route::get('/home', 'HomeController@index')->name('home');

Route::get('/users/{slug}','ProfileController@show');

Route::get('/meme/upload','PostController@create');
Route::post('post','PostController@store');