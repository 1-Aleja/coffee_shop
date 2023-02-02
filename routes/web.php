<?php

use Illuminate\Support\Facades\Route;

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


Route::get('/', [App\Http\Controllers\ProductController::class, 'index'])->name('list');//lista
Route::get('/products/create', [App\Http\Controllers\ProductController::class, 'create'])->name('create');//crear
Route::post('/products', [App\Http\Controllers\ProductController::class, 'store'])->name('store');//registrar
Route::get('/products/{id}/edit', [App\Http\Controllers\ProductController::class, 'edit'])->name('edit');//edicion
Route::post('/products/{id}/edit', [App\Http\Controllers\ProductController::class, 'update'])->name('update');//actualizar
Route::post('/products/{id}/destroy', [App\Http\Controllers\ProductController::class, 'destroy'])->name('destroy');//eliminar
Route::get('/products/{id}/sale', [App\Http\Controllers\ProductController::class, 'sale'])->name('sale');//venta de producto
Route::post('/products/{id}/sale', [App\Http\Controllers\ProductController::class, 'saleupdate'])->name('saleupdate');//venta de producto
