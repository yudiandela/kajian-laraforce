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

Route::get('task', 'TaskController@index')->name('task.index');

Auth::routes();

Route::group(['middleware' => ['auth']], function () {
    Route::get('/home', 'HomeController@index')->name('home');
    Route::resource('todo', 'TodoController')->except(['create', 'show']);
    Route::resource('users', 'UserController');
    Route::get('/data/users', 'UserController@dataUsers')->name('data.users');
});
