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
    return view('start');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/events', 'EventController@index')->name('events');//->middleware('auth')


// Agrupamento de Rotas
//Route::prefix('schedule')->group(function () {
//    Route::get('/', 'ScheduleController@index')->name('schedule');
//    Route::get('/add', 'ScheduleController@create')->name('schedule.add');
//
//
//});

Route::resource('schedule', 'ScheduleController')->middleware('auth');

//Route::group(['prefix' => 'schedule', 'middleware' => 'auth'], function () {
//    Route::get('/', 'ScheduleController@index')->name('schedule');
//    Route::get('/add', 'ScheduleController@create')->name('schedule.add');
//    Route::post('/add', 'ScheduleController@store')->name('schedule.add');
//    Route::get('/show/{id}', 'ScheduleController@show')->name('schedule.add');
//
//    Route::get('projetos/editar/{id}', 'ScheduleController@getEditar');
//    Route::post('projetos/editar/{id}', 'ScheduleController@postEditar');
//    Route::post('projetos/deletar/{id}', 'ScheduleController@postDeletar');
//
//});