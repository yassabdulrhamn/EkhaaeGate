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
Route::resource('Orphans', 'OrphnsController');
Route::resource('Homes', 'HomeController');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/', 'PageController@Dashboard');

Route::get('/orphans/new', 'PageController@newOrphan');
Route::get('/orphans/list', 'OrphnsController@getOrphans');
Route::get('/orphans/editorphan/{id}/edit', 'OrphnsController@editOrphan');
Route::post('/orphans/register/submit', 'OrphnsController@submit');

Route::post('/homes/register/submit', 'HomeController@store');
Route::get('/homes/new', 'PageController@newHome');
Route::get('/lists/homes', 'HomeController@getHomes');
Route::get('/edit/home/{id}', 'HomeController@edit');
Route::get('/edit/addtohome/{orphanID}/{homID}/assignhome', 'OrphnsController@assignHome');

Route::get('/lists/branches', 'BranchesController@getBranches');

Route::get('/dashboard', 'DashboardController@dashboard');
