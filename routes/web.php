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
Route::post('ajax_content', [\App\Http\Controllers\AjaxController::class, 'content']);
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// News Routes
Route::get('news', [\App\Http\Controllers\NewsController::class, 'index']);
Route::get('add_news', [\App\Http\Controllers\NewsController::class, 'create']);
Route::post('add_news', [\App\Http\Controllers\NewsController::class, 'store']);
Route::get('news/{id}', [\App\Http\Controllers\NewsController::class, 'show']);
Route::get('edit_news/{id}', [\App\Http\Controllers\NewsController::class, 'edit']);
Route::post('update_news/{id}', [\App\Http\Controllers\NewsController::class, 'update']);
Route::get('delete_news/{id}', [\App\Http\Controllers\NewsController::class, 'destroy']);
