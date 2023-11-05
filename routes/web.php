<?php

use Illuminate\Support\Facades\Route;
use App\Models\Task;


Route::get('/', function () {
    return view('home');
});


Route::get('/tasks', function () {

    $data = Task::all();
    return view('tasks')->with('tasks',$data);

});

Route::post('/saveTask', 'App\Http\Controllers\TaskController@SaveTask');

Route::get('/markAsCompleted/{id}', 'App\Http\Controllers\TaskController@MarkAsCompleted');

Route::get('/markAsNotCompleted/{id}', 'App\Http\Controllers\TaskController@MarkAsNotCompleted');

Route::get('/delete/{id}', 'App\Http\Controllers\TaskController@DeleteTask');

Route::get('/update/{id}', 'App\Http\Controllers\TaskController@UpdateTask');

Route::post('/updateTask', 'App\Http\Controllers\TaskController@UpdateTaskToNew');


