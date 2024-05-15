@extends('template')

@section('title', 'Login')

@section('content')
    <div class="form-group margin">
        <form class="" action="/auth" method="post">
            @csrf
            <label>
                <h2 class="text-center">Login Page</h2>
                </h2>
            </label>
            <label>Email</label>
            <input type="text" class="form-control" name="usr"><br>
            <label>Password</label>
            <input type="password" class="form-control" name="pwd"><br>
            <button type="submit" class="btn btn-primary" name="login-submit">Login</button>
            <br />
            {{ session('error') }}
        </form>
    </div>
@endsection
