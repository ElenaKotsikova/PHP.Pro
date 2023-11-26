<?php

namespace App\Http\Controllers;

use App\Facades\BookFacade;
use App\Http\Controllers\api\Controller;
use App\Http\Requests\Book\StoreBookRequest;
use App\Http\Resources\BookListResource;
use App\Http\Resources\BookResource;
use App\Models\Book;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;
use Illuminate\View\View;

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

    public function create():View{

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

    public function store()
    {
        $book = BookFacade::store();
        return redirect()->back();
       //return redirect()->action('App\Http\Controllers\BookController@update',$book);
    }

    public function update(Book $book)
    {
        return view('addBook',['book' => $book]);
    }


}


