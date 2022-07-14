<?php

use Illuminate\Support\Facades\Route;

Route::get('/', [App\Http\Controllers\HomeController::class, 'homePage']);
Route::get('/about', [App\Http\Controllers\HomeController::class, 'aboutPage']);

Route::get('/product/create', [App\Http\Controllers\ProductController::class, 'formCreate']);


// Route::get('/product/create', function () {
//     return "Disini Katalog";
// });
