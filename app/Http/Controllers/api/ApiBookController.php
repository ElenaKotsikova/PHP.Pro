<?php

namespace App\Http\Controllers\api;

use App\Facades\api\ApiBookFacade;
use App\Http\Requests\api\Book\ApiStoreBookRequest;
use App\Http\Requests\api\Book\ApiStoreReviewRequest;
use App\Http\Resources\api\ApiBookListResource;
use App\Http\Resources\api\ApiBookResource;
use App\Http\Resources\api\ApiReviewResource;
use App\Models\Book;
use App\Models\User;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;


class ApiBookController extends Controller
{

    public function __construct()
    {
        auth()->login(
            User::query()->inRandomOrder()->first()
        );
    }

    // @route /books
    public function index():AnonymousResourceCollection
    {
        return ApiBookListResource::collection(
            ApiBookFacade::getFacadeApplication()
        );
    }

    // @route /books/{id}
    public function show(Book $book): ApiBookResource
    {
        return new ApiBookResource($book);
    }


    public function reviewStore(Book $book,ApiStoreReviewRequest $request):ApiReviewResource
    {
        return new ApiReviewResource(
            ApiBookFacade::setBook($book)->createReview($request)
        );
    }


    public function store(ApiStoreBookRequest $request): JsonResponse
    {
        $book = ApiBookFacade::store($request);

        return response()->json(new ApiBookResource($book), 201);
    }

    public function update(Book $book): ApiBookResource
    {
        return new ApiBookResource(
            ApiBookFacade::setBook($book)->update()
        );
    }



}



