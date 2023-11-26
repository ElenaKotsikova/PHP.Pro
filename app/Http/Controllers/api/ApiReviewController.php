<?php

namespace App\Http\Controllers\api;

use App\Models\Review;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

class ApiReviewController extends Controller
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
