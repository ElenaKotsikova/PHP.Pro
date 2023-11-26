<?php

namespace App\Http\Controllers\api;

use App\Models\Image;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

class ApiImageController extends Controller
{
    public function index(){
        $image = Image::all();

        return $image;
    }

    public function show($id)
    {
        $image = Image::where('id', $id)
            ->first();
        if($image === null){
            throw new NotFoundHttpException();
        }
        return $image;
    }
}
