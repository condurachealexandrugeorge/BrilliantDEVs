@if(Auth::check())
    <ul class="nav justify-content-end">
        @if(Auth::user()->hasRole('Admin'))
            <li class="nav-item">
                <a class="nav-link active" href="/admin">Admin</a>
            </li>
        @elseif(Auth::user()->hasRole('Manager'))
            <li class="nav-item">
                <a class="nav-link active" href="/manager">Manager</a>
            </li>
        @elseif(Auth::user()->hasRole('Developer'))
            <li class="nav-item">
                <a class="nav-link active" href="/developer">Developer</a>
            </li>
        @elseif(Auth::user()->hasRole('Client'))
            <li class="nav-item">
                <a class="nav-link active" href="/client">Client</a>
            </li>
        @endif
        <li class="nav-item">
            <a class="nav-link active" href="/logout">LogOut</a>
        </li>
    </ul>
@else
    <ul class="nav justify-content-end">
        <li class="nav-item">
            <a class="nav-link active" href="/signup">Register</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="/signin">Login</a>
        </li>
    </ul>
@endif