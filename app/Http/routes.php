<?php

Route::group(['prefix' => 'pages'], function()
{
    Route::get('/home', 'PagesController@home');
});

Route::group(['prefix' => 'auth', 'namespace' => 'Auth'], function()
{
    Route::get('/soundcloud', 'AuthController@soundcloud');
    Route::get('/mixcloud', 'AuthController@mixcloud');
});
