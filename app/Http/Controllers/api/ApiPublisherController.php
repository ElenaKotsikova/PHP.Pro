<?php

namespace App\Http\Controllers\api;

use App\Models\Publisher;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

class ApiPublisherController extends Controller
{
    public function index(){

        $publishers = Publisher::all();



        //return view('selectpublisher',['publishers'=>$publisher]);
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
