@extends('layouts.default')
@section('content')
<div class="form_book" >
    <form action="{{route('books.update',[$book->id])}}" method="post" enctype="multipart/form-data">
        @csrf
        @method('PATCH')
        <x-book.input-text : label="Название книги"
                           : name="title" : id="title" :errors="$errors->get('title')"
                           :value="$title"/>
        <x-book.input-text : label="Колличество страниц " : name="page_number" : id="page_number"
                           :errors="$errors->get('page_number')" :value="$page_number"/>
        <x-book.input-text-aria : label="Анатация книги" : name="annotation" : id="annotation"
                                :errors="$errors->get('annotation')" />
        <x-book.input-text : label="Обложка" : name="images[]"
                           : id="images" :type="'file'" :multiple="true"
        />
        <x-book.input-select :label="'Статус'" :name="'status'" :id="'status'" :options="$statusList"
                                 :value="$status"
        />
        <x-book.input-select :label="'Авторы'" :name="'author_id'" :id="'author'" :options="$authors"
                                :value="$authorid"
        />
        <x-book.input-select :label="'Публикации'" :name="'publisher_id'" :id="'publisher'" :options="$publishers"
                        :value="$publisherid"
        />
        <button type="submit" class="btn btn-success">Обновить</button>
        <a  href="{{route('books.index')}}" class="btn btn-danger" role="button" >Отмена</a>
    </form>
</div>
@endsection
