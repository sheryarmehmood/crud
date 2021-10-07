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
    return view('/welcome');
});

Route::group(['middleware' => 'auth'], function () {

    Route::get('/about-us', function () {
        return "About Us";
    });

    Route::get('/tasks', 'TasksController@index');
    Route::get('/create-task', 'TasksController@createTask');
    Route::post('/submit-task', 'TasksController@addTask');
    Route::get('/update-task/{id}', 'TasksController@updateTask');
    Route::post('/update-task-form', 'TasksController@updateTasksData');
    Route::get('/delete-task/{id}', 'TasksController@deleteTask');

    Route::get('/posts', 'PostsController@index'); 
    Route::get('/create-post', 'PostsController@createPost'); 
    Route::post('/submit-post', 'PostsController@addPost'); 
    Route::get('/update-post/{id}', 'PostsController@updatePost'); 
    Route::post('/update-post-form','PostsController@updatePostsData'); 
    Route::get('/delete-post/{id}', 'PostsController@deletePost'); 

    Route::get('/posts/user/{id}', 'UserController@specificUserPost'); 
    Route::get('/home', 'HomeController@index')->name('home');
});


Auth::routes();



