@extends('layouts.master')

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
                                <a class="list-group-item list-group-item-action waves-effect">Facturi scadente
                                    <span class="badge badge-warning badge-pill pull-right">22
                                    </span>
                                </a>
                                <a class="list-group-item list-group-item-action waves-effect">Servicii hosting
                                    <span class="badge badge-primary badge-pill pull-right">5
                                    </span>
                                </a>
                                <a class="list-group-item list-group-item-action waves-effect">Servicii mentenanta
                                    <span class="badge badge-primary badge-pill pull-right">14</span>
                                </a>
                                <a class="list-group-item list-group-item-action waves-effect">Useri
                                    <span class="badge badge-primary badge-pill pull-right">123</span>
                                </a>
                                <a class="list-group-item list-group-item-action waves-effect">Istoric facturi
                                    <i class="fa fa-file pull-right" aria-hidden="true" style="font-size: 24px;"></i>
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
                                <a class="list-group-item list-group-item-action waves-effect" href="{{ url('users') }}">All Users
                                    <i class="fa fa-users pull-right" aria-hidden="true" style="font-size: 24px;" ></i>
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