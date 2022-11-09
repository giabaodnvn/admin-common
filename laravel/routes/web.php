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


//Change language
Route::get('/lang/{lang}', 'App\Http\Controllers\HomeController@changeLanguage')->name('change.language');
Route::get('/404','App\Http\Controllers\HomeController@error')->name('web.error');
Route::group([
    'prefix' => '{locale}',
    'middleware' => ['change.locale'], 
    'where' => ['locale' => '[a-zA-Z]{2}']
], function() {
    Route::get('/','App\Http\Controllers\HomeController@index')->name('web.index');
    Route::get('/{post}','App\Http\Controllers\HomeController@postDetail')->name('post.detail');
    Route::get('/category/{category}','App\Http\Controllers\HomeController@getPostByCategory')->name('category.post');
    Route::get('/tag/{tag}','App\Http\Controllers\HomeController@getPostByTag')->name('tag.post');
});

