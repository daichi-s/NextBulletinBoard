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

Route::get('/', 'HomeController@index')->name('home');

Auth::routes();

Route::prefix('board')->group(function () {
    Route::get('/', 'BoardController@index')->name('board.index');
    Route::get('/create', 'BoardController@create')->name('board.create');
    Route::put('/{id}/edit', 'BoardController@edit')->name('board.edit');
    Route::delete('/delete', 'BoardController@delete')->name('board.delete');    

    Route::prefix('comment')->group(function () {
        Route::get('/', 'CommentController@index')->name('comment.index');
        Route::get('/create', 'CommentController@create')->name('comment.create');
        Route::put('/{id}/edit', 'CommentController@edit')->name('comment.edit');
        Route::delete('/delete', 'CommentController@delete')->name('comment.delete');   
    });
});

//admin

