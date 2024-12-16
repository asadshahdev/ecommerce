@extends('layout')

@section('title')
    login
@endsection

@section('content')
    <form action="" method="POST">
        <div class="mb-3">
            <label for="useremail" class="form-label">Email</label>
            <input type="text" class="form-control" name="email" id="useremail">
        </div>
        <div class="mb-3">
            <label for="password" class="form-label">Password</label>
            <input type="Password" class="form-control" name="password" id="password">
        </div>
        <div class="mb-3">
            <button type="submit" class="btn btn-success btn-sm">Login</button>
            <a href="{{route('register')}}" class="btn btn-warning btn-sm">Back</a>
        </div>
    </form>
@endsection