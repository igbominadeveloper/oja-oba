<?php
Route::get('/', function () {
    return view('welcome');
});

Route::get('/{route}', function() {
    return redirect('/');
})->where('route','[A-Za-z]+');

Route::post('login', 'SessionsController@store');
