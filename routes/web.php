<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// rotta per la home
Route::get('/', function () {
    return view('home');
})->name('home');

// rotta per la characters
Route::get('/characters', function () {
    return view('characters');
})->name('characters');

// rotta per la comics
Route::get('/comics', function () {
    return view('comics');
})->name('comics');

// rotta per la movies
Route::get('/movies', function () {
    return view('movies');
})->name('movies');

// rotta per la tv
Route::get('/tv', function () {
    return view('tv');
})->name('tv');

// rotta per la games
Route::get('/games', function () {
    return view('games');
})->name('games');

// rotta per la collectibles
Route::get('/collectibles', function () {
    return view('collectibles');
})->name('collectibles');

// rotta per la videos
Route::get('/videos', function () {
    return view('videos');
})->name('videos');

// rotta per la fans
Route::get('/fans', function () {
    return view('fans');
})->name('fans');

// rotta per la news
Route::get('/', function () {
    return view('news');
})->name('news');

// rotta per la shop
Route::get('/', function () {
    return view('shop');
})->name('shop');
