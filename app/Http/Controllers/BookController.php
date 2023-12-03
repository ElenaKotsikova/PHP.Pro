<?php

namespace App\Http\Controllers;

use App\Facades\BookFacade;
use App\Http\Controllers\api\Controller;
use App\Http\Requests\Book\StoreBookRequest;
use App\Http\Resources\BookListResource;
use App\Http\Resources\BookResource;
use App\Models\Author;
use App\Models\Book;
use App\Models\Publisher;
use App\Services\Book\CreateBookData;
use App\Enums\BookStatus;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;
use Illuminate\Routing\Redirector;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Storage;
use Illuminate\View\View;

class BookController extends Controller
{
    public function index():View
    {
        $books = BookFacade::getPublishedBooks();
        return view('books.index', ['books' => $books]);

    }
    public function show(Book $book):View
    {
        return view('books.show', ['book' => $book]);
    }

    public function create():View{

        $statusList = [
            [
                'key' => BookStatus::Published,
                'value' => 'Опубликована',
            ],
            [
                'key' => BookStatus::Draft,
                'value' => 'Черновик',
            ],
        ];

        $authors = Author::query()->get()->map(function ($author) {
            return [
                'key' => $author->id,
                'value' => "$author->name $author->surname",
            ];
        })->toArray();

        $publishers = Publisher::query()->get()->map(function ($publisher) {
            return [
                'key' => $publisher->id,
                'value' => "$publisher->name $publisher->surname",
            ];
        })->toArray();

        return view('books.addBook', [
            'authors' => $authors,
            'statusList' => $statusList,
            'publishers' => $publishers,
        ]);
    }

    public function store(StoreBookRequest $request): RedirectResponse
    {
        $book = BookFacade::store(
            $request->data()
        );

        return redirect()->route('books.show', ['book' => $book->id]);
    }

    public  function update_book_id(Book $book):View
    {
        $boo_update =new Book();

         dd($boo_update->find($book->id));
        //return view('books.updateBook',['book' => $boo_update->find($book->id)]);
    }

    public function update(Book $book)
    {
       $book = BookFacade::update();
       return redirect()->route('books.index');

    }




}

