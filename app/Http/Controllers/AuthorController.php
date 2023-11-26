<?php

namespace App\Http\Controllers;

use App\Http\Controllers\api\Controller;
use App\Http\Requests\Author\StoreAuthorRequest;
use App\Models\Author;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class AuthorController extends Controller
{

    public function full_index_author():View
    {
        $authors = Author::all();

        return view('author/listauthor',['authors'=>$authors]);
    }


    public function index(){

        $authors = Author::all();

        $result_author =$authors->map(function ($author){
            return[
                'id' => $author->id,
                'name'=>$author->name,
            ];
        });
        return $result_author;
    }
    public function show(Author $author):View
    {
        return view('author/author_show',['author'=>$author]);

    }

    public function create():View
    {
       $author = new Author();
       return view('author/addAuthor',['author'=>$author]);
    }

    public function  store()
    {
         dd(request());
    }

}


