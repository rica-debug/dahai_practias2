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
    Route::get('/', [ProductoController::class, 'index'])->name('products');

    Route::get('/solar-modules', [ProductoController::class, 'categoriaSolarModules'])->name('products.solar-modules');
    Route::get('/inverters', [ProductoController::class, 'categoriaInversores'])->name('products.inverters');
    Route::get('/storage-solutions', [ProductoController::class, 'categoriaBaterias'])->name('products.storage-solutions');
    Route::get('/ev-charger', [ProductoController::class, 'categoriaPilas'])->name('products.evcharger');
});
// Ruta dinámica que usa base de datos
Route::get('/productos', [ProductoController::class, 'index'])->name('productos');
Route::get('/products', [ProductoController::class, 'index'])->name('products');
Route::get('/producto/{id}', [ProductoController::class, 'show'])->name('producto.show');