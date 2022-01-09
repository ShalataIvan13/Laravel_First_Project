<?php

use Illuminate\Support\Facades\Route;

// функция get удобна если мы хотим отследить просто какие-то страничьки по типу home, about и тд. 
Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');

// функция post нужна что-бы получать данные из формы с методом post
Route::get(
    '/contact/all/{id}', 
    'ContactController@showOneMessage'
)->name('contact-data-one');

Route::get(
    '/contact/all/{id}/update', 
    'ContactController@updateMessage'
)->name('contact-update');

Route::post(
    '/contact/all/{id}/update', 
    'ContactController@updateMessageSubmit'
)->name('contact-update-submit');

Route::get(
    '/contact/all/{id}/delete', 
    'ContactController@deleteMessage'
)->name('contact-delete');

Route::get('/contact/all', 'ContactController@allData')->name('contact-data');
Route::post('/contact/submit', 'ContactController@submit')->name('contact-form');