<?php

use Illuminate\Support\Facades\Route;
//use App\Http\Controllers\PageController;
use App\Http\Controllers\pages\HomeController;

Route::get('/', HomeController::class);

/*Route::get('/', [PageController::class, 'index']);
Route::get('/contact', [PageController::class, 'contact']);
Route::get('/about-us', [PageController::class, 'aboutUs']);
Route::get('/blog', [PageController::class, 'blog']);
Route::get('/blog/{id}', [PageController::class, 'showBlog']);*/