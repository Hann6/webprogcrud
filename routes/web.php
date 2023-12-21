<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

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
});

Route::get('/index', [ProductController::class, 'index'])->name('index');
Route::get('/create', [ProductController::class, 'create'])->name('create');
Route::post('/index', [ProductController::class, 'store'])->name('store');
Route::get('/index/{index}/edit', [ProductController::class, 'edit'])->name('edit');
Route::put('/index/{index}/update', [ProductController::class, 'update'])->name('update');
Route::delete('/index/{index}/delete', [ProductController::class, 'delete'])->name('delete');