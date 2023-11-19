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


/*Route::get('/addForm',function (){
    return view('addBook');
})->name('form');*/

//Route::post('/addForm/submit','saveForm')->name('addFormSub');

Route::controller(BookController::class)->prefix('/books')->group(function () {
    Route::get('/', 'index')->name('books.index');
    Route::get('/{id}', 'show')->name('book');
    Route::post('/','saved')->name('AddBook');


});

Route::controller(PublisherController::class)->group(function (){
    Route::get('/','index')->name('publishers.index');
});

Route::controller(AuthorController::class)->group(function (){
    Route::get('/','index')->name('author.index');
});


