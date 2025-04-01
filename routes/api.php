<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\admin\PostController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::resource('admin/posts', PostController::class);
Route::get('admin/posts-with-users', [PostController::class, 'postsWithUsers']);
Route::get('admin/usersWithPostsCount', [PostController::class, 'usersWithPostsCount']);
Route::get('admin/searchPosts', [PostController::class, 'searchPosts']);