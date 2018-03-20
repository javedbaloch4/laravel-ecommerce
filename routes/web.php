<?php

    // Dashboard
    Route::get('/', 'DashboardController@index');

    // Products
    Route::resource('/products','ProductController');


    // Orders
    Route::resource('/orders','OrderController');
    Route::get('/confirm/{id}','OrderController@confirm')->name('order.confirm');
    Route::get('/pending/{id}','OrderController@pending')->name('order.pending');


    // Users
    Route::resource('/users','UsersController');