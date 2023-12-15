@extends('layouts.default')
@section('content')
<div class="form_author">
    <form action="{{route('author.update',[$author->id])}}" method="post" class="form_add_author">
        @csrf
        @method('PATCH')
        <x-author.input-text-author : label="Фамилия" : name="surname"
                                    : id="surname" :errors="$errors->get('surname')"
                                    :value="$surname"/>
        <x-author.input-text-author : label="Имя" : name="name"
                                    : id="name" :value="$name"
                                    :errors="$errors->get('name')"/>
        <x-author.input-text-author : label="Отчество" : name="patronymic"
                                    : id="patronymic" :value="$patronymic"
                                    :errors="$errors->get('patronymic')" />
        <button type="submit" class="btn btn-success button_form_author">Обновить</button>
        <a  href="{{route('author.index')}}" class="btn btn-danger button_form_author " role="button" >Отмена</a>
    </form>
</div>
@endsection
