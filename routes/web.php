<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductoController;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/', [ProductoController::class, 'index'])->name('productos.index');
Route::get('/producto/{id}', [ProductoController::class, 'show'])->name('productos.show');
