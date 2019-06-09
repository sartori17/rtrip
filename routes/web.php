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
    //return view('welcome');
    return view('start');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/schedule', 'ScheduleController@index')->name('schedule');

Route::get('/events', 'EventController@index')->name('events');

Route::get('/events2', 'EventController@index2');


// Agrupamento de Rotas


Route::prefix('admin')->group(function () {
    Route::get('/', function () {
        return 'Meu app';
    });

    Route::get('events', 'EventController@admin');
});