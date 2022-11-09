<?php

use Illuminate\Support\Facades\Route;
use App\Models\Post;

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



//Admin Auth
Route::get('login', 'App\Http\Controllers\Admin\AuthController@showLoginForm')->name('admin.login.form');
Route::post('login', 'App\Http\Controllers\Admin\AuthController@login')->name('admin.login');
Route::post('logout', 'App\Http\Controllers\Admin\AuthController@logout')->name('admin.logout');

Route::group(['middleware' => ['check.user']], function() {
	Route::get('/', 'App\Http\Controllers\Admin\DashboardController@index')->name('admin.dashboard');
    Route::resource('categories','App\Http\Controllers\Admin\CategoryController', ['as' => 'admin']);
    Route::resource('tags','App\Http\Controllers\Admin\TagController', ['as' => 'admin']);
    Route::resource('posts','App\Http\Controllers\Admin\PostController', ['as' => 'admin']);
    Route::resource('users','App\Http\Controllers\Admin\UserController', ['as' => 'admin']);
    Route::resource('reviews','App\Http\Controllers\Admin\ReviewController', ['as' => 'admin']);
    // Route::resource('permissions','App\Http\Controllers\Admin\PermissionController', ['as' => 'admin']);
    Route::resource('roles','App\Http\Controllers\Admin\RoleController', ['as' => 'admin'])->except('show');

    Route::group(['prefix' => 'media'], function () {
        \UniSharp\LaravelFilemanager\Lfm::routes();
    });	
});
