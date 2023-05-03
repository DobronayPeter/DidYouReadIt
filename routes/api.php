<?php

use App\Http\Controllers\BookController;
use App\Http\Controllers\ReviewController;
use App\Http\Controllers\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/review', [ReviewController::class, 'index'])->name('review.index');
Route::get('/review/{id}', [ReviewController::class, 'show'])->name('review.show')->whereNumber('id');
Route::post('/review', [ReviewController::class, 'store'])->name('review.store');
Route::put('/review/{$id}', [ReviewController::class, 'update'])->name('review.update')->whereNumber('id');
Route::delete('/review/{$id}', [ReviewController::class, 'delete'])->name('review.destroy')->whereNumber('id');

Route::get('/book', [BookController::class, 'index'])->name('book.index');
Route::get('/book/{id}', [BookController::class, 'show'])->name('book.show')->whereNumber('id');
Route::post('/book', [BookController::class, 'store'])->name('book.store');
Route::put('/book/{$id}', [BookController::class, 'update'])->name('book.update')->whereNumber('id');
Route::delete('/book/{$id}', [BookController::class, 'delete'])->name('book.destroy')->whereNumber('id');

Route::get('/user', [UserController::class, 'index'])->name('user.index');
Route::get('/user/{id}', [UserController::class, 'show'])->name('user.show')->whereNumber('id');
Route::post('/user', [UserController::class, 'store'])->name('user.store');
Route::put('/user/{$id}', [UserController::class, 'update'])->name('user.update')->whereNumber('id');
Route::delete('/user/{$id}', [UserController::class, 'delete'])->name('user.destroy')->whereNumber('id');