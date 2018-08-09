@extends('layouts.master')

@section('content')
    <main class="pt-5 mx-lg-5">
        <div class="container-fluid mt-5">
            <table id="dtBasicExample" class="table table-striped table-bordered table-sm" cellspacing="0" width="100%">
                <thead>
                <tr>
                    <th class="th-sm">ID
                        <i class="fa fa-sort float-right" aria-hidden="true"></i>
                    </th>
                    <th class="th-sm">Name
                        <i class="fa fa-sort float-right" aria-hidden="true"></i>
                    </th>
                    <th class="th-sm">Email
                        <i class="fa fa-sort float-right" aria-hidden="true"></i>
                    </th>
                    <th class="th-sm">Rule
                        <i class="fa fa-sort float-right" aria-hidden="true"></i>
                    </th>
                </tr>
                </thead>
                <tbody>
                @foreach($users as $user)
                    <td>{{$user->id}}</td>
                    <td>{{$user->name}}</td>
                    <td>{{$user->email}}</td>
                    <td>{{$user ->hasRole('Admin') ? 'Admin' : ''}}
                        {{$user ->hasRole('Manager') ? 'Manager' : ''}}
                        {{$user ->hasRole('Developer') ? 'Developer' : ''}}
                        {{$user ->hasRole('Client') ? 'Client' : ''}}

                    </td>
                </tr>
                </tbody>
                @endforeach
                <tr>
            </table>
        </div>
    </main>
@endsection
@section('scripts')
    <script type="text/javascript">
        $(document).ready(function () {
            $('#dtBasicExample').DataTable();
            $('.dataTables_length').addClass('bs-select');
        });
    </script>
@endsection