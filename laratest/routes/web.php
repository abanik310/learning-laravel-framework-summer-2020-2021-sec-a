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



Route::get('/register', function () {
    
    return view('signup');
});
