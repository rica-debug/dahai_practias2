<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductoController;

// Página principal
Route::get('/', function () {
    return view('index');
})->name('index');

// Páginas básicas
Route::view('company', 'company')->name('company');
Route::view('career', 'career')->name('career');
Route::view('contact', 'contact')->name('contact');
Route::view('news', 'news')->name('news');
Route::view('join', 'join')->name('join');
Route::view('privacy', 'privacy')->name('privacy');
Route::view('download', 'download')->name('download');

// Rutas de productos estáticos
Route::prefix('products')->group(function () {
    Route::get('/', function () {
        return view('products');
    })->name('products');
    
    Route::get('/ev-charger', function () {
        return view('products-EVCharger');
    })->name('products.evcharger');
    
    Route::get('/inverters', function () {
        return view('products-Inverters');
    })->name('products.inverters');
    
    Route::get('/solar-modules', function () {
        return view('products-SolarModules');
    })->name('products.solar-modules');
    
    Route::get('/storage-solutions', function () {
        return view('products-StorageSolutions');
    })->name('products.storage-solutions');
});

// Ruta dinámica que usa base de datos
Route::get('/productos', [ProductoController::class, 'index'])->name('productos');
Route::get('/products', [ProductoController::class, 'index'])->name('products');
Route::get('/producto/{id}', [ProductoController::class, 'show'])->name('producto.show');