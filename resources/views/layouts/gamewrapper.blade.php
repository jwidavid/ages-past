<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <title>Ages Past</title>
    
    <!-- Scripts -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
    
    <!-- Fonts -->
    <link rel='stylesheet' href='http://fonts.googleapis.com/css?family=Marcellus+SC' type='text/css'>
    
    <!-- Styles -->
    <link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
    <link rel="stylesheet" href="{{ URL::asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('css/game.css') }}" type="text/css" media="all">    
</head>

<body>
    
<div class="site-wrapper">
    <div class="site-wrapper-inner">
        <header id="game-header">
            <ul class="row list-unstyled">
                <li class="col-xs-4 navbar-header">
                    <button class="collapsed navbar-toggle mt15 ml15" type="button" id="game-sidebar-menu" >
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </li>
                <li class="col-xs-4">
                    <img src="{{ URL::asset('images/logo.png') }}" alt="Ages Past" class="img-responsive visible-xs center-block mt10"  />
                </li>
                <li class="col-xs-4">
                    <div class="dropdown pull-right mt15 mr15 game-menu">
                        <button class="btn dropdown-toggle" type="button" id="game-menu" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                            Menu
                            <span class="caret"></span>
                        </button>
                        <ul class="dropdown-menu" aria-labelledby="game-menu">
                            <li><a href="/chat">Chat</a></li>
                            <li><a href="/forum">Forum</a></li>
                            <li><a href="#" data-toggle="modal" data-target="#terms">Laws</a></li>
                            <li><a href="/staff">Staff</a></li>
                            <li><a href="/account-profile">Account Options</a></li>
                            <li><a href="{{ url('/logout') }}">Log Out</a></li>
                        </ul>
                    </div>
                </li>
            </ul>
        </header>
            
        <div id="extruderLeft" class="sidebar" aria-labelledby="game-menu">
            <img src="{{ URL::asset('images/logo.png') }}" alt="Ages Past" class="img-responsive hidden-xs"  />
                
            <!--Basic Player Information-->    
            <div class="row mt25">
                <div class="col-xs-12">
                    <div class="sidebar-callout">
                        <div style="display:inline-block;vertical-align:top;width:25%">
                            <img src="{AVATAR}" style="height:100px;width:100%">
                        </div>
                        <div style="display:inline-block;vertical-align:top;width:45%;padding-left:10px;padding-right:10px;">
                            <p>{{ $character->name }} ({{ $character->id }})</p>
                            <p>{RANK}</p>
                            <p></p>
                            <p>Clan: <a href="clan.php"><u>{TRIBENAME}</u></a></p>
                        </div>
                        <div style="display:inline-block;vertical-align:top;width:20%;text-align:right;">
                            <p id="clock"></p>
                        </div>
                    </div>
                </div>
            </div>
            <!--End Basic Player Information-->
               
            <!--Stats Bar - Only shows here if on mobile device-->
            <div class="row mt25 visible-xs">
                <div class="col-xs-6 ">
                    <div class="clearfix">
                        <p class="power-label pull-left">LVL {{ $character->level }}</p>
                    </div>
                    <div class="clearfix">
                        <p class="power-label pull-left">XP</p>
                        <p class="power-label stat"> {{ $character->experience }}/{{ $character->experience_needed }}</p>
                    </div>
                        
                    <div class="clearfix">
                        <p class="power-label pull-left">HP</p>
                        <p class="power-label stat"> {{ $character->health }}/{{ $character->health_max }}</p>
                    </div>
                        
                </div>
                <div class="col-xs-6">
                    <div class="clearfix">
                        <p class="power-label pull-left">ELV {{ $character->element_level }}</p>
                    </div>
                        
                    <div class="clearfix">
                        <p class="power-label pull-left">E-X</p>
                        <p class="power-label stat"> {{ $character->element_experience }}/{ELEXPNEED}</p>
                    </div>
                        
                    <div class="clearfix">
                        <p class="power-label pull-left">STA</p>
                        <p class="power-label stat"> {{ $character->stamina }}/{{ $character->stamina_max }}</p>
                    </div>
                        
                </div>
            </div>
            <!--End Stats Bar-->
                 
            <ul class="row list-unstyled mt25">
                <li class="col-lg-6 mt-lg-15"><a href="{{ url('/mensk') }}" onclick="$('#extruderLeft').closeMbExtruder();" class="action-btn-sm btn center-block">Mensk</a></li>
                <li class="col-lg-6 mt-lg-15"><a href="coliseum.php" onclick="$('#extruderLeft').closeMbExtruder();" class="action-btn-sm btn center-block">Coliseum</a></li>
            </ul>
                 
            <!--Not part of a clan-->
            
            <div class="row mt25">
                <div class="col-xs-12">
                    <p class="sidebar-callout text-center">
                        Not yet in a clan. <a href="mensk_library.php?view=join_clan" onclick="$('#extruderLeft').closeMbExtruder();" class="btn action-btn-sm ml15 green-bg">Join a Clan</a>
                    </p>
                </div>
            </div>     

            <!--End Not part of a clan-->
                 
            <!--Tabgroup-->
            <div aria-multiselectable="true" role="tablist" id="accordion" class="panel-group">   
                 
                
                 
                <!--Economy-->     
                <div role="tab">
                    <h3 class="sidebar-title">
                    <a aria-controls="collapseOne" aria-expanded="true" href="#collapseOne" data-parent="#accordion" data-toggle="collapse" class="collapsed">
                        Economy <span class="caret pull-right"></span>
                    </a>
                    </h3>
                </div>
                <div aria-labelledby="headingOne" role="tabpanel" class="panel-collapse collapse" id="collapseOne" style="height: 0px;">
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-xs-4">
                                <img src="{{ URL::asset('images/coin-icon.png') }}" alt="coins" class="img-responsive center-block" />
                                <p class="text-center">{{ $character->funds->coins }}</p>
                            </div>
                            <div class="col-xs-4">
                                <img src="/assets/images/coins-icon.png" alt="banked coins" class="img-responsive center-block" />
                                <p class="text-center">{BCOINS}</p>
                            </div>
                            <div class="col-xs-4">
                                <img src="/assets/images/bronze-icon.png" alt="bronze" class="img-responsive center-block" />
                                <p class="text-center">{{ $character->funds->bronze }}</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-4">
                                <img src="/assets/images/silver-icon.png" alt="silver" class="img-responsive center-block" />
                                <p class="text-center">{{ $character->funds->silver }}</p>
                            </div>
                            <div class="col-xs-4">
                                <img src="/assets/images/gold-icon.png" alt="gold" class="img-responsive center-block" />
                                <p class="text-center">{{ $character->funds->gold }}</p>
                            </div>
                            <div class="col-xs-4">
                                <img src="/assets/images/platinum-icon.png" alt="platinum" class="img-responsive center-block" />
                                <p class="text-center">{{ $character->funds->platinum }}</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!--End Economy-->
                
                <!--Stats-->     
                <div role="tab">
                    <h3 class="sidebar-title">
                    <a aria-controls="stats" aria-expanded="true" href="#stats" data-parent="#accordion" data-toggle="collapse" class="collapsed">
                        Stats <span class="caret pull-right"></span>
                    </a>
                    </h3>
                </div>
                <div aria-labelledby="headingOne" role="tabpanel" class="panel-collapse collapse" id="stats" style="height: 0px;">
                    <div class="panel-body">
                        <ul class="row list-unstyled">
                            <li class="col-xs-6 mb10"><a href="stats.php" onclick="$('#extruderLeft').closeMbExtruder();" class="action-btn-sm btn center-block">Stats</a></li>
                            <li class="col-xs-6 mb10"><a href="stats.php?view=abilities" onclick="$('#extruderLeft').closeMbExtruder();" class="action-btn-sm btn center-block">Abilities</a></li>
                            <li class="col-xs-6 mb10"><a href="stats.php?view=weaponclass" onclick="$('#extruderLeft').closeMbExtruder();" class="action-btn-sm btn center-block">Weapons</a></li>
                            <li class="col-xs-6 mb10"><a href="stats.php?view=special" onclick="$('#extruderLeft').closeMbExtruder();" class="action-btn-sm btn center-block">Special</a></li>
                            <li class="col-xs-6 mb10"><a href="stats.php?view=element" onclick="$('#extruderLeft').closeMbExtruder();" class="action-btn-sm btn center-block">Element</a></li>
                            <li class="col-xs-6 mb10"><a href="stats.php?view=mining" onclick="$('#extruderLeft').closeMbExtruder();" class="action-btn-sm btn center-block">Mining</a></li>
                            <li class="col-xs-6 mb10"><a href="stats.php?view=reputation" onclick="$('#extruderLeft').closeMbExtruder();" class="action-btn-sm btn center-block">Reputation</a></li>
                            <li class="col-xs-6 mb10"><a href="equipment.php" onclick="$('#extruderLeft').closeMbExtruder();" class="action-btn-sm btn center-block">Equipment</a></li>
                            <li class="col-xs-6 mb10"><a href="stats.php?view=tickets" onclick="$('#extruderLeft').closeMbExtruder();" class="action-btn-sm btn center-block">Tickets</a></li>
                            <li class="col-xs-6 mb10"><a href="stats.php?view=boosters" onclick="$('#extruderLeft').closeMbExtruder();" class="action-btn-sm btn center-block">Boosters</a></li>
                        </ul>
                    </div>
                </div>
                <!--End Stats-->
            </div>
            <!--End Tabgroup-->
                
            <!--Donation Status-->
            <div class="row mt25">
                <div class="col-xs-12">
                    <div class="sidebar-callout">
                        <p class="text-center">Want to help this game keep getting better?</p>
                        <p class="text-center"><button class="btn action-btn-sm ml15 green-bg">Donate</button></p>
                        <p class="power-label">{PRC}% Complete</p>
                        <div class="progress   hidden-xs">
                            <div class="progress-bar" role="progressbar" aria-valuenow="{PRC}" aria-valuemin="0" aria-valuemax="100" style="width: 10%;">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--End Donation Status-->
    </div>

    <div id="content" class="content-wrapper" >
        <div class="collapse" id="collapseExample">
            <div class="message">
                <p>Testing...</p>
                <button class="msg-close btn-link" type="button" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
                  <b>x</b>
                </button>
            </div>
        </div>
        <!--Stats - Only shows here if on large display-->
        <ul class="list-inline stats-list hidden-xs">
            <li>
                <div class="clearfix">
                    <p class="power-label pull-left">LVL {{ $character->level }}</p>
                    <p class="power-label stat">{{ $character->level_experience }}/{{ $character->experience_needed }}</p>
                </div>
                <div class="progress">
                    <div class="progress-bar" role="progressbar" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100" style="width:10%;">
                    </div>
                </div>
            </li>
            <li>
                <div class="clearfix">
                    <p class="power-label pull-left">ELV {{ $character->element_level }}</p>
                    <p class="power-label stat">{{ $character->element_experience }}/
	                    {{ $character->element_experience_needed }}</p>
                </div>
                <div class="progress">
                    <div class="progress-bar" role="progressbar" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100" style="width:10%;">
                    </div>
                </div>
            </li>
            <li>
            <div class="clearfix">
                <p class="power-label pull-left">HP</p>
                <p class="power-label stat">{{ $character->health }}/{{ $character->health_max }}</p>
            </div>
            <div class="progress">
                <div class="progress-bar" role="progressbar" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100" style="width:10%;">
                </div>
            </div>
            <li>
                <div class="clearfix">
                    <p class="power-label pull-left">STA</p>
                    <p class="power-label stat">{{ $character->stamina }}/{{ $character->stamina_max }}</p>
                </div>
                <div class="progress">
                    <div class="progress-bar" role="progressbar" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100" style="width:10%;">
                    </div>
                </div>
            </li>           
        </ul>

        <main class="main-content">
	        
	        @include('flash::message')
	        
	        {!! Session::forget('flash_notification.message') !!}
	        
            @if(count($errors))
            <p class="alert alert-danger" style="margin:auto;">{{ $errors->first() }}</p>
            @endif
            <!--Game Content Goes Here-->
            @yield('content')
            <!--End Game Content-->
        </main>
        <!--End Content-->
    </div>
</div>

<script>
	$(function() {
    	$( "#train" ).selectmenu();
  	});
  
  	$("#game-sidebar-menu").click(function(){
    	$("#extruderLeft").slideToggle("slow");
	}); 

	$('#flash-overlay-modal').modal();
	$('div.alert').not('.alert-important').delay(3500).fadeOut(600);
</script>

@yield('page-script')

</body>
</html>