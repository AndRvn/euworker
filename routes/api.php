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

    Route::get('/countries', 'CountryController');
    Route::get('/categories', 'CategoryController');
    Route::get('/cities', 'CityController');
    Route::get('/experiences', 'ExperienceController');
    Route::resource('/vacancies', 'VacancyController');
    Route::put('/users', 'UserController@update')->middleware('jwt');
    Route::post('/users/password', 'UserController@changePassword')->middleware('jwt');

    Route::get('/profiles', 'ProfileController@show');
    Route::put('/profiles/{profile}', 'ProfileController@update');
});



