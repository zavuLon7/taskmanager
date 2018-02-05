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
    return redirect()->route('login');

});

Auth::routes();
Route::get('/logout', function () {
    Auth::logout();
    return redirect('/login');
});


Route::group(['middleware' => 'auth', 'prefix' => 'taskmanager'], function(){
    Route::get('/', 'TaskManager\TaskController@index')->name('taskmanager');
    Route::post('/add', 'TaskManager\TaskController@addTask')->name('add_task');
    Route::put('/edit/{id}', 'TaskManager\TaskController@editTask')->name('edit_task');
    Route::delete('/delete/{id}', 'TaskManager\TaskController@deleteTask')->name('delete_task');
});
