<?php

use App\Http\Controllers\api\ApiBookController;
use Illuminate\Support\Facades\Route;


/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/


Route::controller(ApiBookController::class)->prefix('/books')->group(function () {
    Route::get('/', 'index')->name('api.books.index');
    Route::get('/{id}', 'show')->name('api.book');
    Route::post('/', 'store')->name('api.books.store');
    Route::post('/','saved')->name('api.AddBook');
    Route::put('/{book}', 'update')->name('api.books.update');
    Route::patch('/{book}', 'update')->name('api.books.update');

    Route::post('/{book}/review', 'reviewStore')->name('api.review.store');

    // -- web --
    // vRoute::get('/create', 'create')->name('books.create');
    // vRoute::post('/', 'store')->name('books.store');
});

