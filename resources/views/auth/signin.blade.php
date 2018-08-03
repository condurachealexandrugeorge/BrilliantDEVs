@extends('layouts.master')

@section('content')
    <div style="text-align: center!important; padding-top: 40px; padding-bottom: 40px;">
        <!-- Default form login -->
        <form class="text-center border border-light p-5" action="{{ route('signin') }}" method="post" style="border: none!important;width: 100%; max-width: 500px; padding: 15px; margin: auto;">
            <img src="{{ asset('img/logo.png') }}" class="img-fluid" alt="" style="max-height: 70px;">
            <p class="h4 mb-4" style="margin-top: 30px ">Please sign in</p>
            <!-- Email -->
            <input type="email" id="defaultLoginFormEmail" class="form-control mb-4" placeholder="E-mail" name="email">
            <!-- Password -->
            <input type="password" id="defaultLoginFormPassword" class="form-control mb-4" placeholder="Password" name="password">
        {{ csrf_field() }}
        <!-- Sign in button -->
            <button class="btn btn-info btn-block my-4" type="submit" style="background-color: #fc685f!important;">Sign in</button>
        </form>
    </div>
    <!-- Default form login -->
@endsection