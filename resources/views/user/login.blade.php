@extends('layouts.default')
@section('content')
<div class="form_user">
    <form class="form-control" action="{{ route('user.auth') }}" method="post">
        @csrf
        <input type="email" name="email" >
        <input type="password" name="password">

        <button class="btn btn-primary me-md-2">Login</button>
    </form>
</div>
@endsection
