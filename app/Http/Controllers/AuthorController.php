<?php

namespace App\Http\Controllers;

use App\Models\Author;
use Illuminate\Http\Request;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

class AuthorController extends Controller
{
    public function index(){

        $author = Author::all();

        return $author;
    }

    public function getAuthor(){

        $authors = Author::all();

        $result = $authors->map(function ($author) {
            return [
                'id'=>$author->id,
                'name'=>$author->name,
                ];
        });
        return $result;
}

    public function show($id){

        $author = Author::where('id', $id)
            ->first();

        if ($author === null){
            throw  new NotFoundHttpException();
        }
        return $author;

    }
}
