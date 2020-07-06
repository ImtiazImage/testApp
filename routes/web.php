<?php

Route::get('/todos',        'TodoController@index' )->name('todo.index');
Route::get('/todos/create', 'TodoController@create');
Route::post('/todos/create','TodoController@store' );
Route::get('/todos/edit/{todo}',   'TodoController@edit'  );
Route::patch('/todos/update/{todo}','TodoController@update'  )->name('todo.update');
Route::put('/todos/complete/{todo}','TodoController@complete'  )->name('todo.complete');
Route::delete('/todos/incomplete/{todo}','TodoController@incomplete'  )->name('todo.incomplete');
Route::delete('/todos/delete/{todo}','TodoController@delete'  )->name('todo.delete');


Route::get('/', function () {
    return view('welcome');
});
Route::post('/upload', 'UserController@uploadAvatar' );

Route::get('/user', 'UserController@index');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
