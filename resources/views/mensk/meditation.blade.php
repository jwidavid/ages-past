@extends('layouts.gamewrapper')

@section('content')
<div class="container-fluid game-container">
	<h1>Stamina Meditation</h1>
    <div class="col-md-6">
        <p>
            <b>Guide:</b><br>
            Oh! Welcome, I guess you are here to increase your maximum stamina? 
            The only way to build stamina is to expend stamina. Meditating underneath the might of the
            waterfall is physically taxing, but it will build your tolerance as well.            
        </p>
        <p>
			Every session uses 10 stamina and increases your maximum stamina by 1.
		</p>
    </div>
    <div class="row mt25">
    	<div class="col-md-4">
        	<form method="post" action="{{ url('/mensk/meditation') }}" class="form nav-list pt15 pr15 pb15 pl15">
	        	{{ csrf_field() }}
                <legend>How many sessions will you be enduring today?</legend>
                <div class="form-group">
                	<input type="text" size="3" value="1" name="stamina_max" />
                </div>                
                <div class="form-group">
                	<input type="submit" value="Meditate" />
                </div>
            </form>
        </div>
    </div>
</div>
@endsection