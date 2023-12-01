@extends('layouts.default')
@section('content')
<div class="form_author">
    <form action="{{route('author.store')}}" method="post" class="form_add_author">
        @csrf
        <x-author.input-text-author : label="Фамилия" : name="surname" : id="surname"/>
        <x-author.input-text-author : label="Имя" : name="name" : id="name"/>
        <x-author.input-text-author : label="Отчество" : name="patronymic" : id="patronymic"/>
        <button type="submit" class="btn btn-success save_author">Сохранить</button>
    </form>
</div>
@endsection
