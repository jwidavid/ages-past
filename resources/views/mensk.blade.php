@extends('layouts.gamewrapper')

@section('content')
<!--Mensk Main Template-->

<div class="container-fluid game-container">
    <h1>Mensk</h1>
    @if ( isset($message) )
    <p>{{ $message }}</p>
    @endif
    <div class="row mt25">
        <div class="col-md-4">
            <ul class="nav-list">
                <li class="nav-list_header bg-rd">Shops</li>
                <li><a href="{{ url('/mensk/merchant') }}"><img src="{{ URL::asset('images/icons/potion-green.png') }}" alt="..." class="img-icon mr5"> Merchant</a></li>
                <li><a href="{{ url('/mensk/blacksmith') }}"><img src="{{ URL::asset('images/icons/blacksmith.png') }}" alt="..." class="img-icon mr5"> Blacksmith</a></li>
                <li><a href="{{ url('/mensk/alchemist') }}"><img src="{{ URL::asset('images/icons/Essence_03.png') }}" alt="..." class="img-icon mr5"> The Alchemist</a></li>
            </ul>
        </div>
        <div class="col-md-4">
            <ul class="nav-list">
                <li class="nav-list_header bg-gld">The Square</li>
                <li><a href='mensk_castle.php'><img src="{{ URL::asset('images/icons/metal_sword.png') }}" alt="..." class="img-icon mr5"> Mensk Castle</a></li>
                <li><a href='mensk_library.php'><img src="{{ URL::asset('images/icons/Book_00.png') }}" alt="..." class="img-icon mr5"> Town Library</a></li>
                <li><a href="{{ url('/mensk/bank') }}"><img src="{{ URL::asset('images/icons/MetalCase_01.png') }}" alt="..." class="img-icon mr5"> Bank</a></li>
                <li><a href='updates.php?view=mensk'><img src="{{ URL::asset('images/icons/Parchment_02.png') }}" alt="..." class="img-icon mr5"> Notices</a></li>
            </ul>
        </div>
        <div class="col-md-4">
            <ul class="nav-list">
                <li class="nav-list_header bg-bl">Mensk Outskirts</li>
                <li><a href='mensk_forest.php'><img src="{{ URL::asset('images/icons/metal_sword.png') }}" alt="..." class="img-icon mr5"> Leave Mensk</a></li>
                <li><a href='mensk_mine.php'><img src="{{ URL::asset('images/icons/mine.png') }}" alt="..." class="img-icon mr5"> The Mines</a></li>
                <li><a href='mensk_training.php'><img src="{{ URL::asset('images/icons/metal_chest_plate.png') }}" alt="..." class="img-icon mr5"> Training Arena</a></li>
                <li><a href='mensk_meditation.php'><img src="{{ URL::asset('images/icons/metal_sword.png') }}" alt="..." class="img-icon mr5"> Meditation</a></li>                
            </ul>
        </div>
    </div>
</div>

<!--
<br><br>
<u><b>Guilds in Mensk</b></u>
<br><br>
<a href="mensk.php?view=fightg">Fighter's Guild</a>
&nbsp;&nbsp;&nbsp;&nbsp;
<a href="mensk.php?view=mageg">Mage's Guild</a>
&nbsp;&nbsp;&nbsp;&nbsp;
<a href="mensk.php?view=merchg">Merchant's Guild</a>
<br>&nbsp;
-->
@endsection