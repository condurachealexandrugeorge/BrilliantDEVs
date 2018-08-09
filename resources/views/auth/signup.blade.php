@extends('layouts.master')

@section('content')
    <main class="pt-5 mx-lg-5">
        <div class="container-fluid mt-5">
            <form class="text-center border border-light p-5" action="{{ route('signup') }}" method="post" style="margin: 0 auto; max-width: 600px;">
                <p class="h4 mb-4">Add User</p>
                <div class="form-row mb-4" style="max-width: 500px;">
                    <div class="col">
                        <input type="text" class="form-control" id="exampleInputName" aria-describedby="nameHelp" placeholder="Enter name" name="name" required>
                        <small id="emailHelp" class="form-text text-muted">We'll never share your name with anyone else.</small>
                    </div>
                </div>
                <div class="form-row mb-4" style="max-width: 500px;">
                    <div class="col">
                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" name="email" required>
                        <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                    </div>
                </div>
                <div class="form-row mb-4" style="max-width: 500px;">
                    <div class="col">
                        <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" name="password" required>
                    </div>
                </div>
                <div class="form-row mb-4" style="max-width: 500px;">
                    {{ csrf_field() }}
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>
        </div>
    </main>
@endsection