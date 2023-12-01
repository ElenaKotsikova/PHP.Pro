@extends('layouts.default')
@section('content')
<x-book-card :book="$book" />
<div>
    <a  href="{{route('updateForm',['book' => $book->id])}}"  class="btn btn-primary add_author" role="button" >Редактирование книги</a>
</div>
@endsection
