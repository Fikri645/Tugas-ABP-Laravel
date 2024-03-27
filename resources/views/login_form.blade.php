@extends('templates')
@section('title', 'Login')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <h2>Login</h2>
                <form method="POST" action="/auth">
                    @csrf
                    <div class="mb-3">
                        <label for="usr" class="form-label">Username</label>
                        <input type="text" class="form-control" id="usr" name="usr" required>
                    </div>
                    <div class="mb-3">
                        <label for="pwd" class="form-label">Password</label>
                        <input type="password" class="form-control" id="pwd" name="pwd" required>
                    </div>
                    @if (session('message'))
                        <div class="alert alert-danger mt-2" role="alert">
                            {{ session('message') }}
                        </div>
                    @endif
                    <button class="btn btn-primary">Login</button>
                </form>
            </div>
        </div>
    </div>
@endsection