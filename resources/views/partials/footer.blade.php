@if(Auth::check()) @if(Auth::user()->hasRole('Admin'))
    <!--Call to action-->
    <div class="pt-4">
        <a class="btn btn-outline-white" href="https://docs.google.com/spreadsheets/d/16Oo4HZW_GlQWPkH38CRgD15jaOXGLirlsCQVV_TmzKo/edit#gid=0" target="_blank" role="button">WORK INFORMATION
            <i class="fa fa-download ml-2"></i>
        </a>
        <a class="btn btn-outline-white" href="https://docs.google.com/spreadsheets/d/1-8XVTFI10XbA_32e5c27koKn20MuMITiLeD4np9zXCI/edit#gid=0" target="_blank" role="button">MANAGEMENT DB
            <i class="fa fa-graduation-cap ml-2"></i>
        </a>
    </div>
    <!--/.Call to action-->

    <hr class="my-4">

    <!-- Social icons -->
    <div class="pb-4">
        <a href="https://www.facebook.com/mdbootstrap" target="_blank">
            <i class="fa fa-facebook mr-3"></i>
        </a>

        <a href="https://www.youtube.com/watch?v=7MUISDJ5ZZ4" target="_blank">
            <i class="fa fa-youtube mr-3"></i>
        </a>

    </div>
    <!-- Social icons -->

    <!--Copyright-->
    <div class="footer-copyright py-3">
        © 2018 Copyright:
        <a href="https://mdbootstrap.com/bootstrap-tutorial/" target="_blank"> BrilliantDEVs </a>
    </div>
    <!--/.Copyright-->
@endif
@endif