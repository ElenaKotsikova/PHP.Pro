<?php

namespace App\Http\Controllers;

use App\Http\Controllers\api\Controller;
use App\Http\Requests\Author\StoreAuthorRequest;
use App\Models\Author;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;
use Illuminate\Http\Request;
class AuthorController extends Controller
{

    public function index():View
    {
        $authors = Author::all();

        return view('author.listauthor',['authors'=>$authors]);
    }

    public function show(Author $author):View
    {
        return view('author.author_show',['author'=>$author]);

    }

    public function create():View
    {
       $author = new Author();
       return view('author.addAuthor',['author'=>$author]);
    }

    public function  store(StoreAuthorRequest $request):RedirectResponse
    {
         $author = new Author([
             'surname'=>$request->input('surname'),
             'name'=>$request->input('name'),
             'patronymic'=>$request->input('patronymic'),
         ]);

         $author->save();
         return redirect()->route('author.index');
    }

    public function edit(Author $author):View
    {
        $author_update = new Author();

        return view('author.updateAuthor',['author'=>$author_update->find($author->id),

            'surname'=>$author->surname,
            'name'=>$author->name,
            'patronymic' =>$author->patronymic
        ]);
    }

    public function update(Author $author)
    {
        $data = [];

        if (request()->method() === 'PUT') {
            $data = [
                'surname' => request()->input('surname'),
                'name' => request()->integer('name'),
                'patronymic' => request()->input('patronymic'),
            ];
        } else {
            if (request()->has('surname')) {
                $data['surname'] = request()->input('surname');
            }
            if (request()->has('name')) {
                $data['name'] = request()->input('name');
            }
            if (request()->has('patronymic')) {
                $data['patronymic'] = request()->integer('patronymic');
            }
        }
        return view('AuthorForm',['author'=>$author]);
    }

    public function search(Request $request)
    {
        $authors = Author::query()
            ->where('surname', 'like', "%$request->q%")
            ->orWhere('name', 'like', "%$request->q%")
            ->orWhere('patronymic', 'like', "%$request->q%")
            ->get()
        ;

        return view('author.listauthor', ['authors' => $authors]);
    }

   /* public function filter(Request $request): View
    {
        $query = Author::query()
            ->when($request->surname, function ($q) use ($request) {
                $q->where('surname', 'like', "%$request->surname%");
            })
            ->when($request->name, function ($q) use ($request) {
                $q->where('name', 'like', "%$request->name%");
            })
            ->when($request->patronymic, function ($q) use ($request) {
                $q->where('patronymic', '=', $request->patronymic);
            })
        ;
         $query->orderBy('surname','desc');

        return view('author.listauthor', ['authors' => $query->get()]);
    }*/


}


