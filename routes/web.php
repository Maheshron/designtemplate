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


Route::get('/','DesignController@index')->name('index');
Route::get('/addpost','DesignController@addstudentdetail')->name('post');
Route::get('/editstudent/{id}','DesignController@edit')->name('editstudent');
Route::post('/studentdataupdate/{id}','DesignController@update')->name('studentdataupdate');
Route::get('/deletestudent/{id}','DesignController@delete')->name('delete');
Route::post('/addstudentdata','DesignController@addstudentdata')->name('addstudentdata');
