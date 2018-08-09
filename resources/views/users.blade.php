@extends('layouts.master')

@section('content')
    <main class="pt-5 mx-lg-5">
        <div class="container-fluid mt-5">
            @foreach($users as $user)
                {{$user}}
            @endforeach
        </div>
    </main>
@endsection
@section('scripts')
    <script type="text/javascript">

    </script>
@endsection