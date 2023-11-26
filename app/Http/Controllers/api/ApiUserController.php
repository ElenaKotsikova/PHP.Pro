<?php

namespace App\Http\Controllers\api;

use App\Models\User;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

class ApiUserController extends Controller
{
    public function index(){

        $user = User::all();

        return $user;
    }

    public function show($id){
        $user = User::where('id',$id)
            ->first();
        if($user === null){
            throw new NotFoundHttpException();
        }
        return $user;

    }
}
