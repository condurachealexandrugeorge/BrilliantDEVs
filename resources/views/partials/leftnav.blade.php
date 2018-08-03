@if(Auth::check()) @if(Auth::user()->hasRole('Admin'))
    <div class="sidebar-fixed position-fixed">
        <a class="logo-wrapper waves-effect" style="padding-left: 0px; padding-right: 0px; width: 100%;
        text-align: center;">
            <img src="{{ asset('img/logo.png') }}" class="img-fluid" alt="" style="max-height: 70px;">
        </a>
        <div class="list-group list-group-flush">
            <a href="#" class="list-group-item active waves-effect" style="background-color:#fc685f; border-color: #fc685f; ">
                <i class="fa fa-pie-chart mr-3"></i>Dashboard
            </a>
            <a href="#" class="list-group-item list-group-item-action waves-effect">
                <i class="fa fa-user mr-3"></i>Profile</a>
            <a href="#" class="list-group-item list-group-item-action waves-effect">
                <i class="fa fa-table mr-3"></i>Tables</a>
            <a href="#" class="list-group-item list-group-item-action waves-effect">
                <i class="fa fa-map mr-3"></i>Maps</a>
            <a href="#" class="list-group-item list-group-item-action waves-effect">
                <i class="fa fa-money mr-3"></i>Orders</a>
        </div>
    </div>
@endif
@endif