@extends('layouts.gamewrapper')

@section('content')
<div class="container-fluid game-container">
    <div class="row">
        <div class="col-md-6">
            <h1>Public Records</h1>
            <p>
                You follow the signs to an area labeled "Public Records".<br>
                Although the section isn't very large, the books are old and covered with dust.
            </p>
        </div>
        <div class="col-md-4">
            <ul class="nav-list">
                <li class="nav-list_header bg-rd">What are you looking for?</li>
                <li><a href="{{ url('/mensk/library/clans') }}"><img src="{{ URL::asset('images/icons/metal_sword.png') }}" alt="..." class="img-icon mr5"> List of Registered Clans</a></li>
                <li><a href="{{ url('/mensk/library/citizens') }}"><img src="{{ URL::asset('images/icons/metal_sword.png') }}" alt="..." class="img-icon mr5"> Citizens of Mensk</a></li>
            </div>
    </div>
    <div class="row">
        <div class="col-md-2 col-md-offset-5">
            <br><br>
            <a href={{ url('/mensk/library') }} class="btn-secondary btn">Return to Lobby</a>
        </div>
    </div>
</div>
@endsection