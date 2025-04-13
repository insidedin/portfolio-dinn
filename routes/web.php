<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home.home');
});

Route::get('/mobile', function () {
    return view('pages.mobile');
});
Route::get('/website', function () {
    return view('pages.web');
});
Route::get('/uiux', function () {
    return view('pages.uiux');
});
Route::get('/desain', function () {
    return view('pages.desain');
});