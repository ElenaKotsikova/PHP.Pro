@extends('layouts.default')
@section('content')
<a  href="{{route('AuthorForm')}}" class="btn btn-primary add_author" role="button" >Добавление автора</a>
<table  class="table table-bordered author">
    <thead>
    <tr>
        <th scope="col">id</th>
        <th scope="col">surname</th>
        <th scope="col">name</th>
        <th scope="col">patronymic</th>
        <th scope="col">created_at</th>
        <th scope="col">updated_at</th>
    </tr>
    </thead>
    <tbody>
<x-author-list :authors="$authors"/>
    </tbody>
</table>

@endsection





