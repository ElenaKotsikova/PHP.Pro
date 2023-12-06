@extends('layouts.default')
@section('content')
<div class="form_author">
    <form action="{{route('author.store')}}" method="post" class="form_add_author">
        @csrf
        <x-author.input-text-author : label="Фамилия" : name="surname"
                                    : id="surname" :errors="$errors->get('surname')"
                                    :value="old('surname')"/>
        <x-author.input-text-author : label="Имя" : name="name"
                                    : id="name" :value="old('name')"
                                    :errors="$errors->get('name')"/>
        <x-author.input-text-author : label="Отчество" : name="patronymic"
                                    : id="patronymic" :value="old('patronymic')"
                                    :errors="$errors->get('patronymic')" />
        <button type="submit" class="btn btn-success button_form_author">Сохранить</button>
        <a  href="{{route('books.index')}}" class="btn btn-danger button_form_author " role="button" >Отмена</a>
    </form>
</div>
@endsection
