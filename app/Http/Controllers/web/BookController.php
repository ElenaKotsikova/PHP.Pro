<?php

namespace App\Http\Controllers\web;

use App\Facades\BookFacade;
use App\Http\Controllers\Controller;
use App\Http\Requests\Book\StoreBookRequest;
use App\Http\Resources\BookResource;
use App\Models\Author;
use App\Http\Controllers\web\AuthorController;
use App\Models\Book;
use App\Models\Publisher;
use Illuminate\Http\JsonResponse;

class BookController extends Controller
{
    public function index()
    {

    }

    public function create(){

        $book = new Book();
        $authors = new AuthorController();
        $publishers = new PublisherController();

        return view('addBook',['book'=>$book],['authors'=>$authors->index(),'publishers'=>$publishers->index()]);
    }

    public function saved()
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
    }

   /* public function store(StoreBookRequest $request)
    {
        $book = BookFacade::store($request);

        return redirect('update');
    }
*/
   /* public function update(Book $book)
    {
        return view('addBook',['book' => $book]);
    }
*/


}


