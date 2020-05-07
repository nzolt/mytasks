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

Route::get('/', function () {
    return view('index');
});

Route::get('task/create', 'TaskController@create')->name('create');
Route::post('task/create', 'TaskController@createPost')->name('createPost');
Route::get('task/{id}', 'TaskController@task')->name('show');
Route::post('task/complete', 'TaskController@complete')->name('complete');
Route::post('task/reject', 'TaskController@reject')->name('reject');

Route::get('tasks/list', 'TasksController@list')->name('listTasks');
Route::get('tasks/completed', 'TasksController@completed')->name('completedTasks');
