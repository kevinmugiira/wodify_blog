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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/layout',[\App\Http\Controllers\LayoutController::class, 'index']);
Route::get('/index',[\App\Http\Controllers\IndexController::class, 'index']);
Route::get('/contact', [\App\Http\Controllers\ContactController::class, 'index']);
Route::get('/category', [\App\Http\Controllers\CategoryController::class, 'index']);
Route::get('/blog', [\App\Http\Controllers\BlogController::class, 'index']);
Route::get('/about', [\App\Http\Controllers\AboutController::class, 'index']);
