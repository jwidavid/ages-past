<!DOCTYPE html>
<html lang="en">
<head>
    <title>Ages Past</title>
    <!--<meta name="viewport" content="width=device-width, initial-scale=1.0">-->
    <meta charset="utf-8">

    <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
    
    <!-- Scripts -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    
    <!-- Styles -->
    <link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
    <link rel="stylesheet" href="{{ URL::asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('css/style.css') }}" type="text/css" media="all">

    <!-- Fonts -->
    <link href='http://fonts.googleapis.com/css?family=Vollkorn:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Nosifer' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Work+Sans:400,900' rel='stylesheet' type='text/css'>

</head>

<body>

<div id="wrapper" class="">
    <nav class="navbar mb50" >
        <div class="container menu-primary-wrapper">
            <div class="navbar-header">
                <button aria-controls="navbar" aria-expanded="false" data-target="#navbar" data-toggle="collapse" class="navbar-toggle collapsed" type="button">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="logo navbar-brand" href="{{ URL::asset('images/logo.png') }}"> </a>
            </div>
            <div id="navbar" class="navbar-collapse collapse navbar-right" aria-expanded="true">
                <a href="{{ url('/changelog') }}">Changelog</a>
                <a href="{{ url('/about') }}">About the Game</a>
                
                @if (Auth::guest())
                    <a href="{{ url('/login') }}" title="Login" class="btn-sm btn reverse gray-btn">Login</a>    
                @else
                    <a href="{{ url('/logout') }}" title="Login" class="btn-sm btn reverse gray-btn">Logout</a>
                @endif
            </div><!--/.nav-collapse -->
        </div>
    </nav>
    <div class="container banner">
        {{-- 
        <div class="row"> 
            <div class="col-sm-5">
                <img src="/assets/images/nightofterror.png" alt="Night of Terror" class="img-responsive"/>
                <div class="progress" style="height: 30px">
                    <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%; font-size:20px;padding:5px;">
                        60% of goal!
                    </div>
                </div>
                <h3 class="reverse text-center">Login to donate for the event!</h3>
            </div>
        </div>
        --}}
    </div>
    <main class="content-area">
    
    @yield('content')
    
    </main><!-- #primary -->
</div>

</body>
</html>