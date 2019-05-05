<?php

Route::get('/')->name('home')->uses('WelcomeController@home')->middleware('guest');

Auth::routes([
    'register' => config('auth.enable_registration'),
    'reset'    => config('auth.enable_reset_pass'),
    'verify'   => true,
]);
Route::get('logout')->name('logout')->uses('Auth\LoginController@logout');

Route::get('dashboard')->name('dashboard')->uses('WelcomeController@dashboard')->middleware(['auth', 'verified']);
