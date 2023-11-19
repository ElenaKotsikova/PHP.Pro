<?php

namespace App\Http\Controllers;

use App\Models\Author;
use Illuminate\Http\Request;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

class AuthorController extends Controller
{
    public function index(){

        $authors = Author::all();

        return $authors;
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
