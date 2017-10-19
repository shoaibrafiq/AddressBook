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


Route::get('/', 'ContactsController@home');
//Route::get('/create', 'ContactsController@create');
Route::get('/create', function () {
    return view('create');
});

Route::post('/insert', 'ContactsController@add');
Route::get('/update/{id}', 'ContactsController@update');
Route::post('/edit/{id}', 'ContactsController@edit');
Route::get('/read/{id}', 'ContactsController@read');
Route::get('/delete/{id}', 'ContactsController@delete');