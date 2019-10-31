<?php

Route::group(['prefix' => 'auth', 'namespace' => 'Api'], function (){
    Route::post('/register', 'AuthController@register');
    Route::post('/login', 'AuthController@login');
    Route::get('/verify/{token}', 'AuthController@verify');

    Route::get('/refresh', 'AuthController@refresh');
    Route::post('/logout', 'AuthController@logout');
    Route::post('/me', 'AuthController@me');

    Route::post('/forgot-password', 'AuthController@forgotPassword');
    Route::post('/reset-password', 'AuthController@resetPassword');
});

