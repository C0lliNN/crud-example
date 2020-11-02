<?php

use App\Http\Controllers\ProductsController;
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

Route::get('/', [ProductsController::class, 'index'])->name('products.index');
Route::post('/', [ProductsController::class, 'store'])->name('products.store');
Route::get('/create', [ProductsController::class, 'create'])->name('products.create');
Route::get('/edit', [ProductsController::class, 'edit'])->name('products.edit');
Route::put('/{product}', [ProductsController::class, 'update'])->name('products.update');
Route::delete('/{product}', [ProductsController::class, 'destroy'])->name(
    'products.destroy'
);
