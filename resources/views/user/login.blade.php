@extends('layouts.default')
@section('content')
<div class="form_user">
    <form  action="{{ route('user.auth') }}" method="post">
        @csrf
        <label for="email">Ввидите почту</label>
        <input type="email" name="email" >
        <label for="password">Ввидите пароль</label>
        <input type="password" name="password">

        <button class="btn btn-primary me-md-2">Login</button>
    </form>
</div>
@endsection
