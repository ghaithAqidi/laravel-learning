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


Route::get('/about', function () {
    return view('about');
});

//show all tasks:
Route::get('/tasks',function(){
   $tasks = DB::table('tasks')->latest()->get();
    
    //another way to get the tasks is by using the Task model we made,
    //in this way we are getting data from model and not fetching from database.
    $tasks2 = App\Task::all();

    return view('tasks.index', compact('tasks','tasks2'));
});

//dynamic url with task id
Route::get('/tasks/{task}', function($id){
    $task = DB::table('tasks')->find($id);
    return view('tasks.show', compact('task'));
});

//using a controller (car example):
Route::get('/cars','CarsController@index');
Route::get('/cars/{car}','CarsController@show');

