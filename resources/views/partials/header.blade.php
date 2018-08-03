
<ul class="nav justify-content-end">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-8 col-sm-8 col-xs-8" style="heigth=50px;">
                <div class="Logo">
                    <a href="/"><img src="https://brilliantdevs.com/wp-content/uploads/2017/06/logo-icon-big-black-150x150.png" id="logo"></a>
                </div>
            </div>
            <div class="col-md-4 col-sm-4 col-xs-4" id="positionnav">
                @if(Auth::check()) @if(Auth::user()->hasRole('Admin'))
                <li class="nav-item">
                    <a class="nav-link active" href="/admin">Admin</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="/manager">Manager</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="/developer">Developer</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="/client">Client</a>
                </li>
                @elseif(Auth::user()->hasRole('Manager'))
                <li class="nav-item">
                    <a class="nav-link active" href="/manager">Manager</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="/developer">Developer</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="/client">Client</a>
                </li>
                @elseif(Auth::user()->hasRole('Developer'))
                <li class="nav-item">
                    <a class="nav-link active" href="/developer">Developer</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="/client">Client</a>
                </li>
                @elseif(Auth::user()->hasRole('Client'))
                <li class="nav-item">
                    <a class="nav-link active" href="/client">Client</a>
                </li>
                @endif
                <li class="nav-item">
                    <a class="nav-link active" href="/logout">LogOut</a>
                </li>
                @else
                <li class="nav-item">
                    <a class="nav-link active" href="/signup">Register</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/signin">Login</a>
                </li>
                @endif
            </div>
        </div>
    </div>
</ul>