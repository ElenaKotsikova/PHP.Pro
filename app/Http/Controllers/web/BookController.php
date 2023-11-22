<?php

namespace App\Http\Controllers\web;

use App\Facades\web\BookFacade;
use App\Http\Controllers\Controller;
use App\Http\Requests\web\Book\StoreBookRequest;
use App\Http\Resources\web\BookResource;
use App\Http\Resources\web\BookListResource;
use App\Models\Book;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;

class BookController extends Controller
{
    public function index():AnonymousResourceCollection
    {
        return BookListResource::collection(
            BookFacade::getFacadeApplication()
        );

    }

    public function show(Book $book): BookResource
    {
        return new BookResource($book);
    }

    public function create(){

        $book = new Book();
        $authors = new AuthorController();
        $publishers = new PublisherController();

        return view('addBook',['book'=>$book],['authors'=>$authors->index(),'publishers'=>$publishers->index()]);
    }

    /*public function saved()
    {
        $book_save= new Book([
            'title'=>request()->input('title'),
            'page_number'=>request()->integer('page_number'),
            'annotation'=>request()->input('annotation'),
            'publisher_id'=>request()->integer('publishers'),
            'author_id'=>request()->integer('authors'),
        ]);

        $book_save->save();

        return redirect()->route('BookForm');
    }*/

    public function store(StoreBookRequest $request)
    {

        //$book = BookFacade::s
        dd($request);

       // return redirect('update');
    }

   /* public function update(Book $book)
    {
        dd($book);
        //return view('addBook',['book' => $book]);
    }*/


}


