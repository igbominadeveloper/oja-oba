<?php

use Illuminate\Http\Request;

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::group(['middleware' => ['role']],function (){
    Route::get('products',[
        'uses' => 'ProductsController@index',
        'roles' => ['administrator','cashier','supervisor']
    ]);

    Route::post('products',[
        'uses' => 'ProductsController@store',
        'roles' => ['administrator']
    ]);

    Route::put('products/{product}',[
        'uses' => 'ProductsController@update',
        'roles' => ['administrator']
    ]);

    Route::delete('products/{product}',[
        'uses' => 'ProductsController@destroy',
        'roles' => ['administrator']
    ]);


    Route::get('orders',[
        'uses' => 'OrderController@index',
        'roles' => ['administrator','cashier','supervisor']
    ]);

    Route::post('orders',[
        'uses' => 'OrderController@store',
        'roles' => ['administrator','cashier','supervisor']
    ]);

    Route::put('orders/{order}',[
        'uses' => 'OrderController@update',
        'roles' => ['administrator','supervisor']
    ]);

    Route::delete('orders/{order}',[
        'uses' => 'OrderController@destroy',
        'roles' => ['administrator','supervisor']
    ]);

    }
);