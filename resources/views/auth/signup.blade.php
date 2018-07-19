@extends('layouts.master')

@section('content')
    <div class="container">
        <form action="{{ route('signup') }}" method="post">
            <div class="form-group">
                <label for="exampleInputName">Name</label>
                <input type="text" class="form-control" id="exampleInputName" aria-describedby="nameHelp" placeholder="Enter name" name="name" required>
                <small id="emailHelp" class="form-text text-muted">We'll never share your name with anyone else.</small>
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Email address</label>
                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" name="email" required>
                <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Password</label>
                <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" name="password" required>
            </div>
            {{ csrf_field() }}
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
@endsection