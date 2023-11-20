<?php

namespace App\Http\Controllers\web;

use App\Http\Controllers\Controller;
use App\Models\Author;
use App\Http\Controllers\web\AuthorController;
use App\Models\Book;
use App\Models\Publisher;

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


}


