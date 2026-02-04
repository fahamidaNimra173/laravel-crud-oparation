<?php

use App\Models\Post;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

Route::get('/', function () {
    return view('welcome', ['posts' => Post::all()]);
})->name('home');
Route::get('/test', function () {
    return view('test');
});
Route::get('/create', [PostController::class, 'create']);
Route::post('/store', [PostController::class, 'ourFilesStore'])->name('store');
Route::get('/edit', [PostController::class, 'editPost'])->name('edit');
