@extends('layouts.master')

@section('content')
    <main class="pt-5 mx-lg-5">
        <div class="container-fluid mt-5">
            <div class="container">
            <table>

            </table>
            </div><br><br>
        </div>

        <div class="table-responsive-sm">
            <table class="table">
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
                        <!-- Default checked -->

                        <form action="{{ route('admin.assign') }}" method="post">

                            <td>{{$user->name}}</td>
                            <td>{{$user->email}}<input type="hidden" name="email" value="{{$user->email}}"></td>
                            <td>
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" {{$user ->hasRole('Admin') ? 'checked' : ''}} class="custom-control-input" id={{$user->id+$increment}} name="role_admin">
                                    <label class="custom-control-label" for={{$user->id+$increment++}}></label>
                                </div>
                            </td>

                            <td>
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" {{$user ->hasRole('Manager') ? 'checked' : ''}} class="custom-control-input" id={{$user->id+$increment}} name="role_manager">
                                    <label class="custom-control-label" for={{$user->id+$increment++}}></label>
                                </div>
                            </td>

                            <td>
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" {{$user ->hasRole('Developer') ? 'checked' : ''}} class="custom-control-input" id={{$user->id+$increment}} name="role_developer">
                                    <label class="custom-control-label" for={{$user->id+$increment++}}></label>
                                </div>
                            </td>

                            <td>
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" {{$user ->hasRole('Client') ? 'checked' : ''}} class="custom-control-input" id={{$user->id+$increment}} name="role_client">
                                    <label class="custom-control-label" for={{$user->id+$increment++}}></label>
                                </div>
                            </td>
                            {{ csrf_field() }}
                            <td><input type="submit" value="Asign Role"></td>
                        </form>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </main>


@endsection
@section('scripts')
    <script type="text/javascript">

    </script>
@endsection