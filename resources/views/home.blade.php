@extends('layouts.master')
<header>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    {{--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">--}}
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</header>
@section('content')
    <main class="pt-5 mx-lg-5">
        <div class="container-fluid mt-5">
            <div class="row wow fadeIn">
                <div class="col-md-3 mb-3">
                    <div class="card mb-3">
                        <!-- Card header -->
                        <div class="card-header text-center">
                            Clienti
                        </div>
                        <!--Card content-->
                        <div class="card-body">
                            <div class="list-group list-group-flush">
                                <a class="list-group-item list-group-item-action waves-effect">Add Client
                                    <i class="fa fa-id-card pull-right" aria-hidden="true" style="font-size: 24px;"></i>
                                </a>
                                <a class="list-group-item list-group-item-action waves-effect">All Clients
                                    <i class="fa fa-users pull-right" aria-hidden="true" style="font-size: 24px;"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 mb-3">
                    <div class="card mb-3">
                        <!-- Card header -->
                        <div class="card-header text-center">
                            Servicii
                        </div>
                        <!--Card content-->
                        <div class="card-body">
                            <div class="list-group list-group-flush">
                                <a class="list-group-item list-group-item-action waves-effect">Hosting
                                    <i class="fa fa-server pull-right" aria-hidden="true" style="font-size: 24px;"></i>
                                </a>
                                <a class="list-group-item list-group-item-action waves-effect">Mentenanta
                                    <i class="fa fa-wrench pull-right" aria-hidden="true" style="font-size: 24px;"></i>
                                </a>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 mb-3">
                    <div class="card mb-3">
                        <!-- Card header -->
                        <div class="card-header text-center">
                            Statistici
                        </div>
                        <!--Card content-->
                        <div class="card-body">
                            <div class="list-group list-group-flush">
                                <a class="list-group-item list-group-item-action waves-effect">Sales
                                    <span class="badge badge-success badge-pill pull-right">22%
                                        <i class="fa fa-arrow-up ml-1"></i>
                                    </span>
                                </a>
                                <a class="list-group-item list-group-item-action waves-effect">Traffic
                                    <span class="badge badge-danger badge-pill pull-right">5%
                                        <i class="fa fa-arrow-down ml-1"></i>
                                    </span>
                                </a>
                                <a class="list-group-item list-group-item-action waves-effect">Orders
                                    <span class="badge badge-primary badge-pill pull-right">14</span>
                                </a>
                                <a class="list-group-item list-group-item-action waves-effect">Issues
                                    <span class="badge badge-primary badge-pill pull-right">123</span>
                                </a>
                                <a class="list-group-item list-group-item-action waves-effect">Messages
                                    <span class="badge badge-primary badge-pill pull-right">8</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 mb-3">
                    <div class="card mb-3">
                        <!-- Card header -->
                        <div class="card-header text-center">
                            User
                        </div>
                        <!--Card content-->
                        <div class="card-body">
                            <div class="list-group list-group-flush">
                                <a class="list-group-item list-group-item-action waves-effect">Add User
                                    <i class="fa fa-user-plus pull-right" aria-hidden="true" style="font-size: 24px;"></i>
                                </a>
                                <a class="list-group-item list-group-item-action waves-effect">All Users
                                    <i class="fa fa-users pull-right" aria-hidden="true" style="font-size: 24px;"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection

@section('scripts')

@endsection