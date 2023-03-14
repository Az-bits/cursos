@extends('layouts.auth-master')

@section('content')
    <form action="/login" method="post">
        @csrf
        <h1>Login</h1>
        @include('layouts.partials.messages')
        <div class="mb-3">
            <label for="username" class="form-label">Username/Email</label>
            <input type="text" class="form-control" name="username" id="username" aria-describedby="emailHelp">
            <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
        </div>
        <div class="mb-3">
            <label for="pass" class="form-label">Password</label>
            <input type="password" class="form-control" id="pass" name="password">
        </div>
        <div class="">
            <a href="/register">Create account</a>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection
