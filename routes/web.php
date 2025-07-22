<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});

// Basic pages
Route::view('company', 'company')->name('company');
Route::view('career', 'career')->name('career');
Route::view('contact', 'contact')->name('contact');
Route::view('news', 'news')->name('news');
Route::view('join', 'join')->name('join');
Route::view('privacy', 'privacy')->name('privacy');
Route::view('download', 'download')->name('download');

// Product routes
Route::view('products', 'products')->name('products');
Route::view('products/ev-charger', 'products-EVCharger')->name('products.evcharger');
Route::view('products/inverters', 'products-Inverters')->name('products.inverters');
Route::view('products/solar-modules', 'products-SolarModules')->name('products.solar-modules');
Route::view('products/storage-solutions', 'products-StorageSolutions')->name('products.storage-solutions');

