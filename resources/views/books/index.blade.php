@extends('layouts.default')
@section('content')
<a  href="{{route('BookForm')}}" class="btn btn-primary add_author" role="button" >Добавление книги</a>
<x-book-list :books="$books" />
@endsection
