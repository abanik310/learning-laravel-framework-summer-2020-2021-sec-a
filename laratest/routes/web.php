<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    echo "Welcome Page";
    //return view('welcome');
});

Route::get('/login', ['uses'=> 'LoginController@index']);

Route::post('/login', 'LoginController@verify');

Route::get('/home', 'HomeController@index');

Route::get('/logout', ['uses'=> 'LogoutController@index']);

Route::get('/user/createUser', 'UserController@create');

Route::get('/user/viewAllUser', 'UserController@view');

Route::get('/user/details/{id}', 'UserController@details');

Route::get('/user/edit/{id}', 'UserController@edit');
Route::get('/user/edit/{id}', 'UserController@update');

Route::get('/user/delete/{id}', 'UserController@delete');
Route::get('/user/delete/{id}', 'UserController@destroy');



Route::get('/register', function () {
    
    return view('signup');
});
