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
    Route::get('/',[AuthorController::class,'index'])->name('authors');
    Route::get('/',[PublisherController::class,'index'])->name('publishers');
    Route::post('/bookform','store')->name('AddBook');
    Route::get('/{id}', 'show')->name('book.show');
    //Route::put('/{book}', 'update')->name('books.update');
    //Route::patch('/{book}', 'update')->name('books.update');
});


Route::controller(AuthorController::class)->prefix('/authors')->group(function (){
   Route::get('/','full_index_author')->name('author.index');
   Route::get('/authorform','create')->name('AuthorForm');
   Route::post('/store','store')->name('author.store');
   Route::get('/{author}','show')->name('author.show');
   //Route::put('/{author}', 'update')->name('author.update');
   //Route::patch('/{author}', 'update')->name('author.update');

});

