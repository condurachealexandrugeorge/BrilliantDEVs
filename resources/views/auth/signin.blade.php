@extends('layouts.master')

@section('content')
    <div class="container">
    <!-- Default form login -->
    <form class="text-center border border-light p-5" action="{{ route('signin') }}" method="post">

        <p class="h4 mb-4">Sign in</p>

        <!-- Email -->
        <input type="email" id="defaultLoginFormEmail" class="form-control mb-4" placeholder="E-mail" name="email">

        <!-- Password -->
        <input type="password" id="defaultLoginFormPassword" class="form-control mb-4" placeholder="Password" name="password">
    {{ csrf_field() }}
        <!-- Sign in button -->
        <button class="btn btn-info btn-block my-4" type="submit">Sign in</button>



    </form>
    </div>
    <!-- Default form login -->
@endsection