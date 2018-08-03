<nav class="navbar fixed-top navbar-expand-lg navbar-light white scrolling-navbar">
    <div class="container-fluid">

        <!-- Brand -->
        <a class="navbar-brand waves-effect" href="/">
            <strong class="dark-text">BrilliantDEVs</strong>
        </a>

        <!-- Collapse -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Links -->
        <div class="collapse navbar-collapse" id="navbarSupportedContent">

            <!-- Left -->
            <ul class="navbar-nav mr-auto">

            </ul>

            <!-- Right -->
            <ul class="navbar-nav nav-flex-icons">
                <li class="nav-item">
                    @if(Auth::check()) @if(Auth::user()->hasRole('Admin'))
                        <a id="navbar-static-login" class="btn btn-info btn-rounded btn-sm waves-effect waves-light"
                           data-target="#navbarLogin" href="{{ url('/logout') }}" style="background-color: #fc685f!important;">Sign Out
                            <i class="fa fa-sign-in ml-2"></i>
                        </a>
                    @endif
                    @endif
                </li>
            </ul>
        </div>
    </div>
</nav>