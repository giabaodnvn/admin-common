<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\GroupController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\LoginController;
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

Route::get('login', [LoginController::class, 'showLoginForm'])->name('admin-login');
Route::post('login', [LoginController::class, 'postFormLogin'])->name('admin-post-login');
Route::middleware(['checkLogin'])->group(function () {
    Route::get('/', [HomeController::class, 'index'])->name('admin-index');
    Route::get('logout', [HomeController::class, 'logout'])->name('admin-logout');

    Route::get('group', [GroupController::class, 'index'])->name('group.list');
    Route::get('group-create', [GroupController::class, 'create'])->name('group.create');
    Route::post('group-create', [GroupController::class, 'store'])->name('group.store');
    Route::get('group-edit/{id}', [GroupController::class, 'edit'])->name('group.edit');
    Route::post('group-edit/{id}', [GroupController::class, 'update'])->name('group.update');
    Route::get('group-delete/{id}', [GroupController::class, 'destroy'])->name('group.delete');

    Route::get('employee', [EmployeeController::class, 'index'])->name('employee.list');
    Route::get('employee-create', [EmployeeController::class, 'create'])->name('employee.create');
    Route::post('employee-create', [EmployeeController::class, 'store'])->name('employee.store');
    Route::get('employee-edit/{id}', [EmployeeController::class, 'edit'])->name('employee.edit');
    Route::post('employee-edit/{id}', [EmployeeController::class, 'update'])->name('employee.update');
    Route::get('employee-delete/{id}', [EmployeeController::class, 'destroy'])->name('employee.delete');
    Route::post('employee-export-form', [EmployeeController::class, 'exportFormRegister'])->name('employee.export-form');
    Route::post('employee-import-register', [EmployeeController::class, 'importRegister'])->name('employee.import-register');
});

