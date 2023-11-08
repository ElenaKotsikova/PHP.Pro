<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

class UserController extends Controller
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
