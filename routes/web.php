<?php

use App\Http\Controllers\AuthorController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\PublisherController;
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
    return view('home');
})->name('home.index');

Route::controller(BookController::class)->prefix('/books')->group(function () {
    Route::get('/', 'index')->name('books.index');
    Route::get('/bookform','create')->name('BookForm');
    Route::get('/updateform/{book}','update_book_id')->name('updateForm');
    Route::post('/','store')->name('book.store');
    Route::get('/search', 'search')->name('book.search');
    Route::get('/filter', 'filter')->name('book.filter');
    Route::get('/{book}', 'show')->name('books.show');
    Route::put('/{book}/update', 'update')->name('books.update');
    Route::patch('/{book}/update', 'update')->name('books.update');
});


Route::controller(AuthorController::class)->prefix('/authors')->group(function (){
    Route::get('/','index')->name('authors');
    Route::get('/','full_index_author')->name('author.index');
    Route::get('/authorform','create')->name('AuthorForm');
    Route::post('/store','store')->name('author.store');
    Route::get('/search', 'search')->name('author.search');
    Route::get('/filter', 'filter')->name('author.filter');
    Route::get('/{author}','show')->name('author.show');
   //Route::put('/{author}', 'update')->name('author.update');
   //Route::patch('/{author}', 'update')->name('author.update');

});

