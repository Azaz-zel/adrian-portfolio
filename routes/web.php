<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'pages.home')->name('home');

Route::get('/home', function () {
    return view('pages.home');
});

Route::view('/work', 'pages.work')->name('work');

Route::view('/work/ralph-de-vinca', 'pages.work.ralph')
    ->name('work.ralph');

Route::view('/work/bali-cebelok-gesiuh', 'pages.work.bali-cebelok')
    ->name('work.bali-cebelok');

Route::view('/about', 'pages.about')
    ->name('about');

Route::view('/contact', 'pages.contact')
    ->name('contact');