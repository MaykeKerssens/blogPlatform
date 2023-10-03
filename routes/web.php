<?php

use App\Http\Controllers\CommentController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});

Route::group(['middleware' => ['role:author']], function () {
    Route::resource('/posts', PostController::class)->except(['index'])->middleware(['auth', 'verified']);
});
Route::get('/dashboard', [PostController::class, 'index'])->name('dashboard');
Route::get('post/{id}', [PostController::class, 'post'])->name('post');
Route::resource('/comments', CommentController::class)->middleware(['auth', 'verified']);
Route::post('comment/{id}/upvote', [CommentController::class, 'upvote'])->name('upvote');
Route::post('comment/{id}/downvote', [CommentController::class, 'downvote'])->name('downvote');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
