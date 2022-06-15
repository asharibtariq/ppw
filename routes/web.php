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
Route::get('single_cause/{id}', [\App\Http\Controllers\MainPageController::class, 'single_cause']);

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

// Event Routes
Route::get('event', [\App\Http\Controllers\EventController::class, 'index']);
Route::get('add_event', [\App\Http\Controllers\EventController::class, 'create']);
Route::post('add_event', [\App\Http\Controllers\EventController::class, 'store']);
Route::get('event/{id}', [\App\Http\Controllers\EventController::class, 'show']);
Route::get('edit_event/{id}', [\App\Http\Controllers\EventController::class, 'edit']);
Route::post('update_event/{id}', [\App\Http\Controllers\EventController::class, 'update']);
Route::get('delete_event/{id}', [\App\Http\Controllers\EventController::class, 'destroy']);

// Event Contacts
Route::get('contact', [\App\Http\Controllers\ContactController::class, 'index']);
Route::get('add_contact', [\App\Http\Controllers\ContactController::class, 'create']);
Route::post('add_contact', [\App\Http\Controllers\ContactController::class, 'store']);
Route::get('contact/{id}', [\App\Http\Controllers\ContactController::class, 'show']);
Route::get('edit_contact/{id}', [\App\Http\Controllers\ContactController::class, 'edit']);
Route::post('update_contact/{id}', [\App\Http\Controllers\ContactController::class, 'update']);
Route::get('delete_contact/{id}', [\App\Http\Controllers\ContactController::class, 'destroy']);

// Event Teams
Route::get('team', [\App\Http\Controllers\TeamController::class, 'index']);
Route::get('add_team', [\App\Http\Controllers\TeamController::class, 'create']);
Route::post('add_team', [\App\Http\Controllers\TeamController::class, 'store']);
Route::get('team/{id}', [\App\Http\Controllers\TeamController::class, 'show']);
Route::get('edit_team/{id}', [\App\Http\Controllers\TeamController::class, 'edit']);
Route::post('update_team/{id}', [\App\Http\Controllers\TeamController::class, 'update']);
Route::get('delete_team/{id}', [\App\Http\Controllers\TeamController::class, 'destroy']);

// Static Pages

Route::get('national_action_plan', function () {
    return view('pages/national_action_plan');
});
Route::get('cci_recommendation', function () {
    return view('pages/cci_recommendation');
});
Route::get('task_force', function () {
    return view('pages/task_force');
});
Route::get('pakistan_population_fund', function () {
    return view('pages/pakistan_population_fund');
});