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
Route::get('/localization/{language}',[\App\Http\Controllers\LocalizationController::class,'switch'])->name('localization.switch');

Route::get('/', function () {
    return view('welcome');
});


Auth::routes([
    'register' => false
]);
//dashboard
Route::group(['prefix' => 'dashboard','middleware' => ['web','auth']], function () {
    Route::get('/', [\App\Http\Controllers\DashboardController::class, 'index'])->name('dashboard.index');

    //categories
    Route::get('/categories/select',[\App\http\Controllers\CategoryController::class,'select'])->name('categories.select');
    Route::resource('/categories',\App\http\Controllers\CategoryController::class);
});
