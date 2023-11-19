<?php

namespace App\Http\Controllers\web;

use App\Http\Controllers\Controller;
use App\Models\Author;
use App\Models\Book;
use App\Models\Publisher;

class BookController extends Controller
{
    public function index()
    {
        $authors = Author::all();
        $publishers = Publisher::all();

        /*  $result_author =$authors->map(function ($author){
           return[
               'id' => $author->id,
               'name'=>$author->name,
           ];
        });
        */

        // return view('addBook',['authors'=>$authors],['publishers'=>$publishers]);
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

        return redirect()->route('books.index');
    }


}


