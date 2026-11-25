<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'pages.home')->name('home');
Route::view('/about', 'pages.about')->name('about');
Route::view('/programs', 'pages.programs')->name('programs');
Route::view('/get-involved', 'pages.get-involved')->name('get-involved');
Route::view('/donate', 'pages.donate')->name('donate');
Route::view('/news', 'pages.news')->name('news');
Route::view('/contact', 'pages.contact')->name('contact');

// Keep links to the previous static site working.
Route::permanentRedirect('/index.html', '/');
Route::permanentRedirect('/about.html', '/about');
Route::permanentRedirect('/programs.html', '/programs');
Route::permanentRedirect('/get-involved.html', '/get-involved');
Route::permanentRedirect('/donate.html', '/donate');
Route::permanentRedirect('/news.html', '/news');
Route::permanentRedirect('/contact.html', '/contact');
