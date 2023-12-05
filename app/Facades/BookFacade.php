<?php

namespace App\Facades;

use App\Models\Book;
use App\Services\Book\BookService;
use App\Services\Book\CreateBookData;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Support\Facades\Facade;
use phpDocumentor\Reflection\Types\Static_;

/**
 * @method static Book store()
 *@method static Collection getPublishedBooks()
 * @method static BookService setBook(Book $book)
 * @method static BookService update()
 * @see \App\Services\Book\BookService
 */
class BookFacade extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return 'book';
    }
}
