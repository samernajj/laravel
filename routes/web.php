<?php

use App\Task;

Route::get('/', 'PostController@index');

Route::get('/post/create', 'PostController@create');

Route::post('/post', 'PostController@store');

Route::get('/post/{post}', 'PostController@show');

Route::post('/post/{post}/comments', 'CommentController@store');

Route::get('/post/tag/{tag}', 'TagController@show');

Route::get('/about', function() {
    return view('about', [
        'name' => 'samer'
    ]);
});

Route::get('/tasks', 'TaskController@index');

Route::get('/tasks/{task}', 'TaskController@show');

Route::get('/tasks_eloquent/', function () {
    $tasks = DB::table('tasks')->latest()->get();
    return view('tasks.index', compact('tasks'));
});

Route::get('/tasks_eloquent/{task}', function (Task $task) {

    return view('tasks.index', compact('task'));
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
