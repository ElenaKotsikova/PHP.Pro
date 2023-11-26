<?php

namespace App\Http\Controllers\api;

use App\Models\Author;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

class ApiAuthorController extends Controller
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
