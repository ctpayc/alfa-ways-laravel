<nav class="navbar-default navbar-static-side" role="navigation">

    @if (Auth::guest())
        {!! Widget::LeftGuestMenu() !!}
    @endif

</nav>