<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});
Route::get('/index', function () {
    return view('index');
});
Route::get('/home', function () {
    return view('index');
});
Route::get('/privacy-policy', function () {
    return view('privacy-policy');
});
Route::get('/terms-and-conditions', function () {
    return view('terms-and-conditions');
});
