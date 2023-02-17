<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\GroupController;
use App\Http\Controllers\EmployeeController;
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
Route::get('group-edit/{id}', [GroupController::class, 'edit'])->name('group.edit');
Route::post('group-edit/{id}', [GroupController::class, 'update'])->name('group.update');
Route::get('group-delete/{id}', [GroupController::class, 'destroy'])->name('group.delete');

Route::get('teacher', [EmployeeController::class, 'index'])->name('teacher.list');
Route::get('teacher-create', [EmployeeController::class, 'create'])->name('teacher.create');
Route::post('teacher-create', [EmployeeController::class, 'store'])->name('teacher.store');
Route::get('teacher-edit/{id}', [EmployeeController::class, 'edit'])->name('teacher.edit');
Route::post('teacher-edit/{id}', [EmployeeController::class, 'update'])->name('teacher.update');
Route::get('teacher-delete/{id}', [EmployeeController::class, 'destroy'])->name('teacher.delete');
