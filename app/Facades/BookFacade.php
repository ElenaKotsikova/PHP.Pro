<?php

namespace App\Facades;

use Illuminate\Support\Facades\Facade;
use App\Http\Requests\Book\StoreBookRequest;
use App\Http\Requests\Book\StoreReviewRequest;
use App\Models\Book;
use App\Models\Review;
use App\Services\Book\BookService;
use Illuminate\Database\Eloquent\Collection;

/**
  * @method static Book store(StoreBookRequest $request)
 *
 *

 */

class BookFacade extends Facade
{

}
