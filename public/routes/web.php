<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::get('/profile', function () {
    return view('page.profile');
})->name('profile');

Route::get('/skill', function () {
    return view('page.skill');
})->name('skill');

Route::get('/portofolio', function () {
    return view('page.portofolio');
})->name('portofolio');
Route::get('/portofolio-1/', function () {
    return view('page.portofolio-1');
})->name('p1');
Route::get('/contact', function () {
    return view('page.contact');
})->name('contact');
