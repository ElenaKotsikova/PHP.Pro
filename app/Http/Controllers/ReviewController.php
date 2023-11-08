<?php

namespace App\Http\Controllers;

use App\Models\Review;
use Illuminate\Http\Request;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

class ReviewController extends Controller
{
    public function index(){

        $review = Review::all();

        return $review;
    }

    public function show($id){
        $review = Review::where('id',$id)
            ->first();

        if($review === null){
            throw new NotFoundHttpException();
        }
        return $review;
    }
}
