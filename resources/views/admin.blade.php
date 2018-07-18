@extends('layouts.master')

@section('content')
    <div class="container">
    <table>
        <thead>
        <th>Nume</th>
        <th>Email</th>
        <th>Admin</th>
        <th>Manager</th>
        <th>Developer</th>
        <th>Client</th>
        <th></th>
        </thead>
        <tbody>
        @foreach($users as $user)
            <tr>
                <form action="{{ route('admin.assign') }}" method="post">
                    <td>{{$user->name}}</td>
                    <td>{{$user->email}}<input type="hidden" name="email" value="{{$user->email}}"></td>
                    <td><input type="checkbox" {{$user ->hasRole('Admin') ? 'checked' : ''}} name="role_admin"></td>
                    <td><input type="checkbox" {{$user ->hasRole('Manager') ? 'checked' : ''}} name="role_manager"></td>
                    <td><input type="checkbox" {{$user ->hasRole('Developer') ? 'checked' : ''}} name="role_developer"></td>
                    <td><input type="checkbox" {{$user ->hasRole('Client') ? 'checked' : ''}} name="role_client"></td>
                    {{ csrf_field() }}
                    <td><input type="submit" value="Asign Role"></td>
                </form>
            </tr>
        @endforeach
        </tbody>
    </table>
    </div>
    @endsection

