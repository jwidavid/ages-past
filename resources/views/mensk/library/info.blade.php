@extends('layouts.gamewrapper')

@section('content')
<div class="container-fluid game-container">
    <div class="row">
        <div class="col-md-6">
            <h1>Helpdesk</h1>
            <p>
                As you approach the helpdesk a librarian greets you.<br> 
                "What can I help you with today?"
            </p>
        </div>
        <div class="col-md-4">
            <ul class="nav-list">
                <li class="nav-list_header bg-rd">I would like to...</li>
                <li><a href="{{ url('/mensk/library/clan/register') }}"><img src="{{ URL::asset('images/icons/metal_sword.png') }}" alt="..." class="img-icon mr5"> Register a Clan ( cost 350,000c )</a></li>
                <li><a href="{{ url('/mensk/library/clan/join') }}"><img src="{{ URL::asset('images/icons/metal_sword.png') }}" alt="..." class="img-icon mr5"> Join a Clan</a></li>
            </ul>
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