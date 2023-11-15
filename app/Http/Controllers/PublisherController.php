<?php

namespace App\Http\Controllers;

use App\Models\Publisher;
use Illuminate\Http\Request;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

class PublisherController extends Controller
{
    public function index(){

        $publisher = Publisher::all();

        return view('selectpublisher',['publishers'=>$publisher]);
    }

    public function show($id)
    {
        $publisher = Publisher::where('id', $id)
            ->first();

      if($publisher === null){
          throw new NotFoundHttpException();
      }
        return $publisher;
    }
}
