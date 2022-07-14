<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

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

Route::get('/', [HomeController::class, 'homePage']);

Route::get('/product/create', [App\Http\Controllers\ProductController::class, 'formCreate']);
Route::post('/product/create', [App\Http\Controllers\ProductController::class, 'saveData']);

Route::get('/product/{id}/edit/', [App\Http\Controllers\ProductController::class, 'formEdit']);
Route::post('/product/{id}/edit', [App\Http\Controllers\ProductController::class, 'updateData']);


Route::delete('/product/{id}/delete', [App\Http\Controllers\ProductController::class, 'deleteData']);
Route::get('/about', [App\Http\Controllers\HomeController::class, 'about']);


// Route::get('/home', function () {
//     return view('beranda');
// });

// Route::get('/about', function () {
//     return view('tentang-kami');
// });
