<?php

use App\Models\Post;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

Route::get('/', function () {
    return view('welcome', ['posts' => Post::paginate(2)]);
})->name('home');
Route::get('/test', function () {
    return view('test');
});
//the surprising thing is we use get method to get and delete data and post method to post and update
Route::get('/create', [PostController::class, 'create']);
Route::post('/store', [PostController::class, 'ourFilesStore'])->name('store');
Route::get('/edit/{id}', [PostController::class, 'editPost'])->name('edit');
Route::post('/update/{id}', [PostController::class, 'updatePost'])->name('update');
Route::get('/delete/{id}', [PostController::class, 'deletePost'])->name('delete');
