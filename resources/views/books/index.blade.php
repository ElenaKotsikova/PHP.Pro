@extends('layouts.default')
@section('content')
@auth
<a  href="{{route('BookForm')}}" class="btn btn-primary add_author" role="button" >Добавление книги</a>
@endauth
<!--form class="d-flex filter"  action="{{route('book.filter')}}">
    <input
        class="form-control mr-sm-2"
        type="search" placeholder="filter"
        name="q"
        value="{{ request()->q }}"
        aria-label="filter">
    <button type="submit" class="btn text-right btn-primary me-md-2">Seachr</button>
</form-->

<x-book.book-list :books="$books" />
@endsection
