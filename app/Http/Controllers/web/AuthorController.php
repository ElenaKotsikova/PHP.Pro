<?php

namespace App\Http\Controllers\web;

use App\Http\Controllers\Controller;
use App\Models\Author;
use Illuminate\Http\Request;

class AuthorController extends Controller
{
    public function index(){
        $authors = Author::all();

        $result_author =$authors->map(function ($author){
            return[
                'id' => $author->id,
                'name'=>$author->name,
            ];
        });

        dd($result_author);


    }
}
