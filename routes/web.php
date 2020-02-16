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

Route::get('/', 'PostsController@show');
Route::get('/articles/create', 'PostsController@createArticle');
Route::get('/articles/{article}/edit', 'PostsController@editArticle');
Route::put('/articles/{article}', 'PostsController@updateArticle');
Route::delete('/articles/{article}', 'PostsController@deleteArticle');
Route::get('/articles', 'PostsController@getArticles');
Route::get('/articles/{article}', 'PostsController@showArticle');
Route::post('/articles', 'PostsController@storeArticle');



