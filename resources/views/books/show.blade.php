@extends('layouts.default')
@section('content')
<x-book.book-card :book="$book" />

<div class="navigation_show">
    <a  href="{{route('book.edit',['book' => $book->id])}}"  class="btn btn-primary add_author" role="button" >Редактирование книги</a>
    <a  href="{{route('books.index')}}"  class="btn btn-primary add_author" role="button" >Вернуться к книгам</a>
</div>

@endsection
