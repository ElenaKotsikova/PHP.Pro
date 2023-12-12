@extends('layouts.default')
@section('content')
<div class="form_user">
    <form  action="{{ route('user.auth') }}" method="post">
        @csrf
        <label for="email">Ввидите почту</label>
        <input dusk="login-email"  type="email" name="email" >
        <label  for="password">Ввидите пароль</label>
        <input dusk="login-password" type="password" name="password">

        <button dusk="login-button" class="btn btn-primary me-md-2" value="login">Login</button>
    </form>
</div>
@endsection
