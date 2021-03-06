<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::prefix('v1')
    ->namespace('Api')
    ->name('api.v1.')
    ->group(function() {

        Route::get('books/search', 'BooksController@search')->name('books.search');
        Route::get('books/detail', 'BooksController@detail')->name('books.detail');
        Route::get('books/chapter', 'BooksController@chapter')->name('books.chapter');
        Route::get('books/read', 'BooksController@read')->name('books.read');
});
