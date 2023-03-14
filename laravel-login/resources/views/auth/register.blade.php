@extends('layouts.auth-master')

@section('content')
    <form action="/register" method="post" autocomplete="off">
        @csrf
        <h1>Create account</h1>
        @include('layouts.partials.messages')
        <div class="form-floating mb-3">
            <input type="email" name="email" class="form-control" id="email" aria-describedby="emailHelp"
                placeholder="email">
            <label for="email" class="form-label">Email address</label>
        </div>
        <div class="form-floating mb-3">
            <input type="text" name="username" class="form-control" id="user" placeholder="username">
            <label for="user" class="form-label">Username</label>
        </div>
        <div class="form-floating mb-3">
            <input type="password" name="password" class="form-control" id="" placeholder="password">
            <label for="" class="form-label">Password</label>
        </div>
        <div class="form-floating mb-3">
            <input type="password" name="password_confirmation" class="form-control" id=""
                placeholder="password_confirmation">
            <label for="" class="form-label">Password Confimation</label>
        </div>
        <div class="mb-3">
            <a href="/login">Login</a>
        </div>
        <button type="submit" class="btn btn-primary">Create account</button>
    </form>
@endsection
