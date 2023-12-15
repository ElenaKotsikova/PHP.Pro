<?php

namespace App\Http\Controllers;

use App\Facades\BookFacade;
use App\Http\Controllers\api\Controller;
use App\Http\Requests\Book\StoreBookRequest;
use App\Http\Resources\BookListResource;
use App\Models\Author;
use App\Models\Book;
use App\Models\Publisher;
use App\Models\Image;
use App\Services\Book\CreateBookData;
use App\Enums\BookStatus;
use Illuminate\Http\RedirectResponse;
use Illuminate\Routing\Redirector;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Storage;
use Illuminate\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Collection;


class BookController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:sanctum')->only(['store', 'create', ]);
    }


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
                'key' => BookStatus::Published->value,
                'value' => 'Опубликована',
            ],
            [
                'key' => BookStatus::Draft->value,
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

    public function store(StoreBookRequest $request):RedirectResponse
    {

        $book = BookFacade::store(
            $request->data()
        );

        return redirect()->route('books.show', ['book' => $book->id]);
    }

    public  function edit(Book $book):View
    {
        $book_update =new Book();

        $statusList = [
            [
                'key' => BookStatus::Published->value,
                'value' => 'Опубликована',
            ],
            [
                'key' => BookStatus::Draft->value,
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

        return view('books.updateBook',['book' => $book_update->find($book->id),
            'title' => $book->title,
            'page_number' => $book->page_number,
            'authors' => $authors,
            'statusList' => $statusList,
            'publishers' => $publishers,
             'status' => $book_update->status,
              'authorid' => $book_update->author_id,
            'publisherid'=>$book_update->publisher_id
            ]);
    }

    public function update(StoreBookRequest $request,Book $book):RedirectResponse
    {
        $book_update = BookFacade::setBook($book)
                       ->update();
        return redirect()->route('books.index');
    }

    public function search(Request $request)
    {
        $books = Book::query()
            ->where('title', 'like', "%$request->q%")
            ->orWhere('annotation', 'like', "%$request->q%")
            ->get()
        ;
        return view('books.index', ['books' => $books]);
    }

   /* public function filter(Request $request): View
    {
        $query = Book::query()
            ->when($request->title, function ($q) use ($request) {
                $q->where('title', 'like', "%$request->title%");
            })
            ->when($request->annotation, function ($q) use ($request) {
                $q->where('annotation', 'like', "%$request->annotation%");
            })
            ->when($request->page_number, function ($q) use ($request) {
                $q->where('page_number', '=', $request->page_number);
            })
        ;
        $query->orderBy('title','desc');

        return view('books.index', ['books' => $query->get()]);
    }*/




}

