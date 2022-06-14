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

/*
Route::get('/', function () {
    return view('welcome');
});
*/

Route::get('/', [\App\Http\Controllers\MainPageController::class, 'index']);

Route::get('blog', function () {
    return view('blog');
});

Route::get('single_blog', function () {
    return view('single_blog');
});

Route::get('single_cause', function () {
    return view('single_cause');
});

Route::get('single_event', function () {
    return view('single_event');
});

Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
