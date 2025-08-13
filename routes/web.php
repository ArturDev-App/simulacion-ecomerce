<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/admin', function () {
    return view('admin.dashboard');
});

Route::get('/admin/productos/crear', function () {
    return view('admin.create');
});

Route::get('/store', function(){
    return view('home.tienda');
});

Route::post('/admin/productos', [ProductController::class, 'store'])->name('productos.store');

Route::get('api/productos', [ProductController::class, 'api']);
