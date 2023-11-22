<?php

use App\Http\Controllers\web\AuthorController;
use App\Http\Controllers\web\BookController;
use App\Http\Controllers\web\PublisherController;
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
})->name('home');

Route::controller(BookController::class)->prefix('/books')->group(function () {
    Route::get('/', 'index')->name('books.index');
    Route::get('/bookform','create')->name('BookForm');
    Route::get('/',[AuthorController::class,'index'])->name('authors');
    Route::get('/',[PublisherController::class,'index'])->name('publishers');
    Route::get('/{id}', 'show')->name('book');
    Route::post('/','store')->name('AddBook');
   // Route::post('/', 'store')->name('books.store');
    //Route::put('/{book}', 'update')->name('books.update');
   // Route::patch('/{book}', 'update')->name('books.update');
});



