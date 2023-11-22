<?php

namespace App\Facades\web;

use App\Http\Requests\web\Book\StoreBookRequest;
use App\Models\Book;
use Illuminate\Support\Facades\Facade;


/**
  * @method static Book store(StoreBookRequest $request)
  * @see \App\Services\Book\web\BookService
 */
class BookFacade extends  Facade
{
  protected  static function getFacadeAccessor():string
  {
      return 'book';
  }
}
