<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductoController;

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
Route::get('/', function () {
    return view('index');
});

Route::get('/producto', [ProductoController::class, 'index'])->name('producto.index');
Route::get('/producto/create', [ProductoController::class, 'create'])->name('producto.create');
Route::get('/producto/store', [ProductoController::class, 'store'])->name('producto.store');
