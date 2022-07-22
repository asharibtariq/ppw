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
Route::get('news_details/{id}', [\App\Http\Controllers\MainPageController::class, 'news_details']);
Route::get('event_details/{id}', [\App\Http\Controllers\MainPageController::class, 'event_details']);
Route::get('publication_details', [\App\Http\Controllers\MainPageController::class, 'publication_details']);
Route::get('training_details', [\App\Http\Controllers\MainPageController::class, 'training_details']);
Route::get('picture_gallery', [\App\Http\Controllers\MainPageController::class, 'picture_gallery']);
Route::post('contact_add', [\App\Http\Controllers\MainPageController::class, 'contact_add'])->name('contact_add');

Route::get('blog', function () {
    return view('blog');
});

Route::get('single_blog', function () {
    return view('single_blog');
});

// Route::get('sitemap.xml', 'SitemapController@index')->name('sitemapxml');
Route::get('sitemap.xml', [App\Http\Controllers\SitemapController::class, 'index'])->name('sitemapxml');

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

//  Contacts Routes
Route::get('contact', [\App\Http\Controllers\ContactController::class, 'index']);
Route::get('add_contact', [\App\Http\Controllers\ContactController::class, 'create']);
Route::post('add_contact', [\App\Http\Controllers\ContactController::class, 'store']);
Route::get('contact/{id}', [\App\Http\Controllers\ContactController::class, 'show']);
Route::get('edit_contact/{id}', [\App\Http\Controllers\ContactController::class, 'edit']);
Route::post('update_contact/{id}', [\App\Http\Controllers\ContactController::class, 'update']);
Route::get('delete_contact/{id}', [\App\Http\Controllers\ContactController::class, 'destroy']);

//  Teams Routes
Route::get('team', [\App\Http\Controllers\TeamController::class, 'index']);
Route::get('add_team', [\App\Http\Controllers\TeamController::class, 'create']);
Route::post('add_team', [\App\Http\Controllers\TeamController::class, 'store']);
Route::get('team/{id}', [\App\Http\Controllers\TeamController::class, 'show']);
Route::get('edit_team/{id}', [\App\Http\Controllers\TeamController::class, 'edit']);
Route::post('update_team/{id}', [\App\Http\Controllers\TeamController::class, 'update']);
Route::get('delete_team/{id}', [\App\Http\Controllers\TeamController::class, 'destroy']);

// Publication Routes
Route::get('publication', [\App\Http\Controllers\PublicationController::class, 'index']);
Route::get('add_publication', [\App\Http\Controllers\PublicationController::class, 'create']);
Route::post('add_publication', [\App\Http\Controllers\PublicationController::class, 'store']);
Route::get('publication/{id}', [\App\Http\Controllers\PublicationController::class, 'show']);
Route::get('edit_publication/{id}', [\App\Http\Controllers\PublicationController::class, 'edit']);
Route::post('update_publication/{id}', [\App\Http\Controllers\PublicationController::class, 'update']);
Route::get('delete_publication/{id}', [\App\Http\Controllers\PublicationController::class, 'destroy']);

// Training Routes
Route::get('training', [\App\Http\Controllers\TrainingController::class, 'index']);
Route::get('add_training', [\App\Http\Controllers\TrainingController::class, 'create']);
Route::post('add_training', [\App\Http\Controllers\TrainingController::class, 'store']);
Route::get('training/{id}', [\App\Http\Controllers\TrainingController::class, 'show']);
Route::get('edit_training/{id}', [\App\Http\Controllers\TrainingController::class, 'edit']);
Route::post('update_training/{id}', [\App\Http\Controllers\TrainingController::class, 'update']);
Route::get('delete_training/{id}', [\App\Http\Controllers\TrainingController::class, 'destroy']);

// Gallery Routes
Route::get('gallery', [\App\Http\Controllers\GalleryController::class, 'index']);
Route::get('add_gallery', [\App\Http\Controllers\GalleryController::class, 'create']);
Route::post('add_gallery', [\App\Http\Controllers\GalleryController::class, 'store']);
Route::get('gallery/{id}', [\App\Http\Controllers\GalleryController::class, 'show']);
Route::get('edit_gallery/{id}', [\App\Http\Controllers\GalleryController::class, 'edit']);
Route::post('update_gallery/{id}', [\App\Http\Controllers\GalleryController::class, 'update']);
Route::get('delete_gallery/{id}', [\App\Http\Controllers\GalleryController::class, 'destroy']);

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
Route::get('about', function () {
    return view('pages/about');
});
Route::get('media', function () {
    return view('pages/media');
});
/*
Route::get('picture_gallery', function () {
    return view('pages/picture_gallery');
});
*/
Route::get('videos', function () {
    return view('pages/videos');
});
