<nav class="navbar navbar-default">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="{{ URL::to('/') }}">RPG</a>
        </div>
        <div class="collapse navbar-collapse" id="myNavbar">
            <ul class="nav navbar-nav">
                {{--<li class="active"><a href="{{ URL::to('/home') }}">Home</a></li>--}}
            </ul>
            <ul class="nav navbar-nav navbar-right">
                @if (Auth::check())
                    <li><a href="{{ URL::to('auth/logout') }}"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
                @else
                    <li><a href="{{ URL::to('auth/register') }}"><span class="glyphicon glyphicon-user"></span> Register</a></li>
                    <li><a href="{{ URL::to('auth/login') }}"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
                @endif
            </ul>
        </div>
    </div>
</nav>