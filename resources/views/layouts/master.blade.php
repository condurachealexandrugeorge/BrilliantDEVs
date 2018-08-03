<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <!-- Bootstrap CSS -->
    <title>BrilliantDevs</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('css/mdb.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('css/style.css') }}" rel="stylesheet" />
    @yield('style')
</head>
<body>
@include('partials.header')

@yield('content')

<!-- JQuery -->
<script src="{{ asset('js/jquery-3.3.1.min.js') }}"></script>
<!-- Bootstrap tooltips -->
<script src="{{ asset('js/popper.min.js') }}"></script>
<!-- Bootstrap core JavaScript -->
<script src="{{ asset('js/bootstrap.min.js') }}"></script>
<script src="{{ asset('js/bootstrap.js') }}"></script>
<!-- MDB core JavaScript -->
<script src="{{ asset('js/mdb.min.js') }}"></script>
<!-- MDBootstrap Datatables  -->
<script src="{{ asset('js/addons/datatables.min.js') }}"></script>
<script src="{{ asset('js/addons/datatables.js') }}"></script>
<!-- MDBootstrap Models  -->
<script src="{{ asset('js/modules/chart.js') }}"></script>
<script src="{{ asset('js/modules/enhanced-modals.js') }}"></script>
<script src="{{ asset('js/modules/forms-free.js') }}"></script>
<script src="{{ asset('js/modules/jquery.easing.js') }}"></script>
<script src="{{ asset('js/modules/scrolling-navbar.js') }}"></script>
<script src="{{ asset('js/modules/velocity.min.js') }}"></script>
<script src="{{ asset('js/modules/waves.js') }}"></script>
<script src="{{ asset('js/modules/wow.js') }}"></script>
@yield('scripts')
</body>
</html>