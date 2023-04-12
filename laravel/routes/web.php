<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\GroupController;
use App\Http\Controllers\Admin\EmployeeController;
use App\Http\Controllers\Admin\LoginController;
use App\Http\Controllers\Admin\DayoffController;

use App\Http\Controllers\User\HomeUserController;
use App\Http\Controllers\User\LoginUserController;
use App\Http\Controllers\Admin\TimekeepAccountController;
use App\Http\Controllers\User\TimekeepAccountUserController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
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
    Route::post('group-export-view', [GroupController::class, 'exportview'])->name('group.export-view');

    Route::get('employee', [EmployeeController::class, 'index'])->name('employee.list');
    Route::get('employee-create', [EmployeeController::class, 'create'])->name('employee.create');
    Route::post('employee-create', [EmployeeController::class, 'store'])->name('employee.store');
    Route::get('employee-edit/{id}', [EmployeeController::class, 'edit'])->name('employee.edit');
    Route::post('employee-edit/{id}', [EmployeeController::class, 'update'])->name('employee.update');
    Route::get('employee-delete/{id}', [EmployeeController::class, 'destroy'])->name('employee.delete');
    Route::post('employee-export-form', [EmployeeController::class, 'exportFormRegister'])->name('employee.export-form');
    Route::post('employee-import-register', [EmployeeController::class, 'importRegister'])->name('employee.import-register');

    Route::get('dayoff', [DayoffController::class, 'index'])->name('dayoff.list');
    Route::get('dayoff-edit/{id}', [DayoffController::class, 'edit'])->name('dayoff.edit');
    Route::post('dayoff-edit/{id}', [DayoffController::class, 'update'])->name('dayoff.update');
    Route::get('dayoff-delete/{id}', [DayoffController::class, 'destroy'])->name('dayoff.delete');
    Route::post('dayoff-export-form', [DayoffController::class, 'exportFormRegister'])->name('dayoff.export-form');
    Route::post('dayoff-import-register', [DayoffController::class, 'importRegister'])->name('dayoff.import-register');

    Route::get('timekeep-account', [TimekeepAccountController::class, 'index'])->name('timekeepaccount.list');
    Route::get('timekeep-account-create', [TimekeepAccountController::class, 'create'])->name('timekeepaccount.create');
    Route::post('timekeep-account-create', [TimekeepAccountController::class, 'store'])->name('timekeepaccount.store');
    Route::get('timekeep-account-edit/{id}', [TimekeepAccountController::class, 'edit'])->name('timekeepaccount.edit');
    Route::post('timekeep-account-edit/{id}', [TimekeepAccountController::class, 'update'])->name('timekeepaccount.update');
    Route::get('timekeep-account-delete/{id}', [TimekeepAccountController::class, 'destroy'])->name('timekeepaccount.delete');
});

Route::get('user-login', [LoginUserController::class, 'showLoginForm'])->name('user-login');
Route::post('user-login', [LoginUserController::class, 'postFormLogin'])->name('user-post-login');
Route::middleware(['checkLoginUser'])->group(function () {
    Route::get('/user', [HomeUserController::class, 'index'])->name('user-index');
    Route::get('timekeep', [TimekeepAccountUserController::class, 'setTimeKeep'])->name('set-timekeep-user');
    Route::get('logout', [HomeUserController::class, 'logout'])->name('user-logout');
});