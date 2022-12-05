<?php

use Illuminate\Support\Facades\Route;

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


Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/books', [App\Http\Controllers\BookController::class, 'index']);
Route::get('/books/create', [App\Http\Controllers\BookController::class, 'create']);
Route::post('/books', [App\Http\Controllers\BookController::class, 'store']);
Route::get('/books/{book}', [App\Http\Controllers\BookController::class, 'show']);



Route::get('/authors', [App\Http\Controllers\AuthorController::class, 'index']);
Route::post('/authors', [App\Http\Controllers\AuthorController::class, 'store']);
Route::get('/authors/create', [App\Http\Controllers\AuthorController::class, 'create']);
Route::get('/authors/{author}', [App\Http\Controllers\AuthorController::class, 'show']);


Route::get('/events', [App\Http\Controllers\EventController::class, 'index']);
Route::get('/events/create', [App\Http\Controllers\EventController::class, 'create']);
Route::post('/events', [App\Http\Controllers\EventController::class, 'store']);
Route::get('/events/{event}', [App\Http\Controllers\EventController::class, 'show']);
