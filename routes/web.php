<?php

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

// Frontend routes
Route::get('/', 'PageController@welcome');
Route::get('/articles', 'ArticleController@index');
Route::get('/articles/{category}/{article}', 'ArticleController@show');
Route::get('/articles/{category}', 'ArticleController@showCategory');
Route::get('/church-activities/{churchActivity}', 'ChurchActivityController@show');

/* Events routes */
Route::get('events', ['uses' => '\SeanDowney\BackpackEventsCrud\app\Http\Controllers\EventController@index']);
Route::get('events/{event}/{subs?}', ['as' => 'view-event', 'uses' => '\SeanDowney\BackpackEventsCrud\app\Http\Controllers\EventController@view'])
    ->where(['event' => '^((?!admin).)*$', 'subs' => '.*']);

// Backend routes
Route::resource('contacts', 'ContactController', ['only', 'store']);
Route::resource('volunteers', 'VolunteerController', ['only', 'store']);


// Auth::routes();
// Route::get('/home', 'HomeController@index')->name('home');
// --------------------
// Backpack\Demo routes
// --------------------
Route::group([
    'prefix'     => config('backpack.base.route_prefix', 'admin'),
    'middleware' => ['admin'],
    'namespace'  => 'Admin',
], function () {
    // CRUD resources and other admin routes
    CRUD::resource('slide', 'SlideCrudController');
    CRUD::resource('album', 'AlbumCrudController');
    CRUD::resource('photo', 'PhotoCrudController');
    CRUD::resource('volunteer', 'VolunteerCrudController');
    CRUD::resource('contact', 'ContactCrudController');
    CRUD::resource('newsletter', 'NewsletterCrudController');
    CRUD::resource('churchactivity', 'ChurchActivityCrudController');
});

/** CATCH-ALL ROUTE for Backpack/PageManager - needs to be at the end of your routes.php file  **/
Route::get('{page}/{subs?}', ['uses' => 'PageController@index'])
    ->where(['page' => '^((?!admin).)*$', 'subs' => '.*']);
