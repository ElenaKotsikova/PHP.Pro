@extends('layouts.default')
@section('content')
<table class="table table-bordered author">
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
<x-author-card :author="$author" />
    </tbody>
</table>
@endsection



