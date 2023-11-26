<?php

namespace App\Http\Controllers;

use App\Http\Controllers\api\Controller;
use App\Models\Publisher;

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
