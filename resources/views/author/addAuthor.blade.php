@extends('layouts.default')
@section('content')
<div class="form_author">
    <form action="{{route('author.store')}}" method="post" class="form_add_author">
        @csrf
        <div class="col-sm">
            <label for="surname" class="form-label">Фамилия</label>
            <input type="text"  name="surname" class="form-control" id="surname" aria-describedby="surname">
        </div>
        <div class="col-sm">
            <label for="name" class="form-label">Имя</label>
            <input type="text" class="form-control" id="name" name="name">
        </div>
        <div class="col-sm">
            <label for="patronymic" class="form-label">Отчество</label>
            <input type="text" class="form-control" name="patronymic" id="patronymic" aria-describedby="patronymic">
        </div>
        <button type="submit" class="btn btn-success save_author">Сохранить</button>
    </form>
</div>
@endsection
