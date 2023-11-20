<?php

namespace App\Http\Controllers\web;

use App\Http\Controllers\Controller;
use App\Models\Publisher;
use Illuminate\Http\Request;

class PublisherController extends Controller
{
    public function index(){

        $publishers = Publisher::all();

        $result_publisher =$publishers->map(function ($publisher){
            return[
                'id' => $publisher->id,
                'name'=>$publisher->name,
            ];
        });
       return $result_publisher;
    }
}
