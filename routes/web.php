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


Route::get('/', function () {

    return view('welcome');
});

Auth::routes();


Route::get('/home', 'HomeController@index')->name('home');
Route::get('/users', 'UserController@index')->name('users');
Route::get('/new/user', 'UserController@create')->name('users.create');
Route::post('/new/create', 'UserController@store')->name('users.store');

Route::prefix('impersonation')->group(function ($router) {
    # Revert route...
    $router->get('revert', 'ImpersonateController@stopImpersonation')->name('impersonate.stop');
    # Impersonate route...
    $router->get('{user}', 'ImpersonateController@impersonate')->name('impersonate');
});

//AJAX CALLS

Route::middleware(['auth'])->prefix('ajax')->group(function () {
    Route::get('/finduser', 'UserController@find')->name('ajax.find.user');

});

