<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\GroupController;
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

Route::get('login', 'HomeController@showLoginForm')->name('admin-login');
Route::post('login', 'HomeController@postFormLogin')->name('admin-post-login');
//Route::middleware(['AdminAuth'])->group(function () {
    Route::get('/', [HomeController::class, 'index'])->name('admin-index');
//});

Route::get('group', [GroupController::class, 'index'])->name('group.list');
Route::get('group-create', [GroupController::class, 'create'])->name('group.create');
Route::post('group-create', [GroupController::class, 'store'])->name('group.store');
Route::get('group-edit', [GroupController::class, 'edit'])->name('group.edit');
Route::post('group-edit', [GroupController::class, 'update'])->name('group.update');
