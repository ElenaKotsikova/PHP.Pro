<?php

namespace App\Facades;

use App\Models\Book;
use Illuminate\Support\Facades\Facade;

/**
 * @method static Book store()
 *
 * @see \App\Services\Book\BookService
 */
class BookFacade extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return 'book';
    }
}
