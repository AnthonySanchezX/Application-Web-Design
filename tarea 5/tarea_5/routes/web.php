<?php

use Illuminate\Support\Facades\Route;


Route::get('/','IndexController@index')->name('index');
Route::get('/edit','EditController@index')->name('edit');
Route::get('/create','CreateController@index')->name('create');

