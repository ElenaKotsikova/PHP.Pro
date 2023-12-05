@extends('layouts.default')
@section('content')
<div class="form_book">
    <form action="{{route('book.store')}}" method="post" enctype="multipart/form-data">
        @csrf
        <x-book.input-text : label="Название книги"
                           : name="title" : id="title" :errors="$errors->get('title')"
                           :value="old('title')"/>
        <x-book.input-text : label="Колличество страниц " : name="page_number" : id="page_number"
                           :errors="$errors->get('page_number')" :value="old('page_number')"/>
        <x-book.input-text-aria : label="Анатация книги" : name="annotation" : id="annotation"
                                :errors="$errors->get('annotation')" />
        <x-book.input-text : label="Обложка" : name="images[]"
                           : id="images" :type="'file'" :multiple="true"/>
        <x-book.input-select :label="'Статус'" :name="'status'" :id="'status'" :options="$statusList"/>
        <x-book.input-select :label="'Авторы'" :name="'author_id'" :id="'author'" :options="$authors"/>
        <x-book.input-select :label="'Публикации'" :name="'publisher_id'" :id="'publisher'" :options="$publishers"/>
        <button  class="btn btn-success">Сохранить</button>
    </form>
</div>
@endsection
