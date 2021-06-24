<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    echo "Welcome Page";
    //return view('welcome');
});

Route::get('/logout', ['uses'=> 'LogoutController@index']);
Route::get('/login', ['uses'=> 'LoginController@index']);
Route::post('/login', 'LoginController@verify');

Route::Group(['middleware'=>['sess']],function()
{

    Route::get('/home', 'HomeController@index')->middleware('sess');
    Route::get('/user/viewAllUser', 'UserController@view')->name('user.viewAllUser')->middleware('sess');
    Route::get('/user/details/{id}', 'UserController@details')->name('user.details')->middleware('sess');
    
    Route::Group(['middleware'=>['type']],function()
    {

        Route::get('/user/createUser', 'UserController@create')->name('user.create')->middleware('sess');
        Route::get('/user/edit/{id}', 'UserController@edit');
        Route::get('/user/edit/{id}', 'UserController@update');
        Route::get('/user/delete/{id}', 'UserController@delete');
        Route::get('/user/delete/{id}', 'UserController@destroy');
    });
});




Route::get('/register', function () {
    
    return view('signup');
});
