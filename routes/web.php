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
<<<<<<< HEAD
=======
    //return view('welcome');
>>>>>>> 642b1dcdbee331321fc4dedd1efa7ededc4b334d
    return view('start');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

<<<<<<< HEAD
=======
Route::get('/schedule', 'ScheduleController@index')->name('schedule');

>>>>>>> 642b1dcdbee331321fc4dedd1efa7ededc4b334d
Route::get('events', 'EventController@index');

Route::get('events2', 'EventController@index2');
