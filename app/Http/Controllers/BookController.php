<?php

namespace App\Http\Controllers;


use App\Http\Requests\Book\StoreBookRequest;
use App\Models\Book;
use App\Models\Review;
use App\Models\User;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Storage;

/**
 * @property-read Review $reviews
 */

class BookController extends Controller
{

    public function __construct()
    {
        auth()->login(
            User::query()->inRandomOrder()->first()
        );
    }
    // @route /books
    public function index()
    {
        //return view('addBook');
        return Book::all();
    }

    // @route /books/{id}
    public function show(Book $book): Book
    {
        return $book;
    }

    public function saved()
    {
        $book_save= new Book([
            'title'=>request()->input('title'),
            'page_number'=>request()->integer('page_number'),
            'annotation'=>request()->input('annotation'),
        ]);
        $book_save->save();

        return redirect()->route('form');
    }

    public function reviewStore(Book $book)
    {
        /** @var Review $review */
        $review = auth()->user()->reviews()->create([
            'text' => request()->input('text'),
            'rate' => request()->integer('rate'),
            'book_id' => $book->id,
        ]);

        return $review;
    }


    public function store(StoreBookRequest $request): JsonResponse
    {
        //        dd($request);
        $files = $request->file('images');

        $book = new Book([
            'title' => request()->input('title'),
            'page_number' => request()->integer('page_number'),
            'annotation' => request()->input('annotation'),
            'author_id' => request()->integer('author_id'),
        ]);

        $book->save();

        foreach ($files as $file) {
            $path = $file->storePublicly();

            $book->images()->create([
                'url' => Storage::url($path),
            ]);
        }

        return response()->json($book->id, 201);
    }

    public function update(Book $book): Book
    {
        $data = [];

        if (request()->method() === 'PUT') {
            $data = [
                'title' => request()->input('title'),
                'page_number' => request()->integer('page_number'),
                'annotation' => request()->input('annotation'),
                'author_id' => request()->integer('author_id'),
            ];
        } else {
            if (request()->has('title')) {
                $data['title'] = request()->input('title');
            }
            if (request()->has('page_number')) {
                $data['page_number'] = request()->integer('page_number');
            }
            if (request()->has('annotation')) {
                $data['annotation'] = request()->input('annotation');
            }
            if (request()->has('author_id')) {
                $data['author_id'] = request()->integer('author_id');
            }
        }

        $book->update($data);

        return $book;
    }


}



