<?php

Route::get('/', function () {
    return view('welcome');
});

Route::get('/{route}', function() {
    return view('welcome');
})->where('route','.*');

Route::post('login', 'SessionsController@store');
