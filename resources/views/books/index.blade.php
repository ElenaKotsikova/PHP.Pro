@extends('layouts.default')
@section('content')
<a  href="{{route('book.create')}}" class="btn btn-primary add_author" role="button" >Добавление книги</a>
<x-book-list :books="$books" />
@endsection
