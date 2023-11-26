<?php

namespace App\Facades\api;

use App\Http\Requests\api\Book\ApiStoreBookRequest;
use App\Models\Book;
use Illuminate\Support\Facades\Facade;


/**
  * @method static Book store(ApiStoreBookRequest $request)
  * @see \App\Services\Book\api\ApiBookService
 */
class ApiBookFacade extends  Facade
{
  protected  static function getFacadeAccessor():string
  {
      return 'book';
  }
}
