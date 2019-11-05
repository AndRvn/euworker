<?php

Route::group(['namespace' => 'Api'], function () {
    Route::group(['prefix' => 'auth'], function () {
        Route::post('/register', 'AuthController@register');
        Route::post('/login', 'AuthController@login');
        Route::get('/verify/{token}', 'AuthController@verify');

        Route::get('/refresh', 'AuthController@refresh');
        Route::post('/logout', 'AuthController@logout');
        Route::post('/me', 'AuthController@me');

        Route::post('/forgot-password', 'AuthController@forgotPassword');
        Route::post('/reset-password', 'AuthController@resetPassword');
    });

    Route::get('/country', 'CountryController');
    Route::get('/category', 'CategoryController');
    Route::get('/city', 'CityController');
    Route::get('/experience', 'ExperienceController');
    Route::resource('/vacancy', 'VacancyController');
    Route::resource('/user', 'UserController');

    Route::get('/profile', 'ProfileController@show');
    Route::post('/profile/{id}', 'ProfileController@store');
});



