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

        return view('books.addBook', [
            'authors' => Author::query()->get(),
            'publishers' => Publisher::query()->get()
        ]);
    }

    public function store(StoreBookRequest $request): RedirectResponse
    {
        $book = BookFacade::store(
            $request->data()
        );

        return redirect()->route('books.show', ['book' => $book->id]);
    }

    /*public function update(Book $book)
    {
        return view('books.addBook',['book' => $book]);
    }*/


}

