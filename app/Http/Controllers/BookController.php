<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\JsonResponse;

class BookController extends Controller
{
    // @route /books
    public function index()
    {
        return view('addBook');
        //return Book::all();
    }

    // @route /books/{id}
    public function show(Book $book): Book
    {
        return $book;
    }

    public function saved()
    {
        $book= new Book();
        $book->title=request()->input('title');
        $book->page_number=request()->integer('page_number');
        $book->annotation=request()->input('annotation');

        $book->save();

        return redirect()->route('AddBook')->with('success','Книги добавлены!') ;
    }

    public function reviewStore(Book $book){
        $review = auth()->user()->reviews()->create([
            'text'=>request()->input('text'),
            'rate'=>request()->integer('rate'),
            'book_id'=>$book->id,
        ]);
    }


    public function store(): JsonResponse
    {
        $book = new Book([
            'title' => request()->input('title'),
            'page_number' => request()->integer('page_number'),
            'annotation' => request()->input('annotation'),
            'author_id' => request()->integer('author_id'),
        ]);

        $book->save();

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



