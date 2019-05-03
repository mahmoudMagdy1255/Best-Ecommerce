<?php

Route::get('/', 'LandingPageController@index')->name('landing-page');
Route::get('/shop', 'ShopController@index')->name('shop.index');
Route::get('/shop/{product}', 'ShopController@show')->name('shop.show');
Route::get('/thankyou', 'ConfirmationController@index')->name('confirmation.index');
Route::get('/home', 'HomeController@index')->name('home');

