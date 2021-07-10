<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('auth.login');
});

Auth::routes(['register' => false]);

Route::get('/home', 'HomeController@index')->name('home');

// users routes
Route::get('/user-list', 'UserController@view')->name('user-list');
Route::match(['get','post'],'/user-add', 'UserController@add')->name('user-add');
Route::match(['get','post'],'/user-edit', 'UserController@edit')->name('user-edit');

// roles routes
Route::get('/role-list', 'RoleController@view')->name('role-list');
Route::match(['get','post'],'/role-add', 'RoleController@add')->name('role-add');
Route::match(['get','post'],'/role-edit', 'RoleController@edit')->name('role-edit');
