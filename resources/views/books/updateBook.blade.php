@extends('layouts.default')
@section('content')
<div class="form_book">
    <form action="{{route('books.update',$book->id)}}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label for="title" class="form-label">Название книги</label>
            <input type="text"  name="title" class="form-control" id="title" aria-describedby="title">
        </div>
        <div class="mb-3">
            <label for="page" class="form-label">Количество страниц</label>
            <input type="text" class="form-control" id="page_number" name="page_number">
        </div>
        <div class="mb-3">
            <label for="annotation" class="form-label">Анатация книги</label>
            <textarea type="text" class="form-control" name="annotation" id="annotation" aria-describedby="annotation">
            </textarea>
        </div>
        <div class="mb-3">
            <label for="image" class="form-label">Обложка</label>
            <input type="file" class="form-control" name="images[]" id="images[]" multiple aria-describedby="images[]">
        </div>
        <div class="mb-3">
          @include('books.selectauthor')
        </div>
        <div class="mb-3">
          @include('books.selectpublisher')
        </div>
        <div class="mb-3">
            @include('books.selectstatus')
        </div>
        <button class="btn btn-success">Обновить</button>
    </form>
</div>
@endsection
