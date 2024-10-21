<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/login-page', function () {
    return 'We will build the Sign-Up / Sign-In stuff here';
});

Route::get('/404', function () {
    return 'We might build a custom 404, or something else, etc';
});
