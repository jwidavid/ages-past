@extends('layouts.gamewrapper')

@section('content')
<!--Mensk Main Template-->

<div class="container-fluid game-container">
    <h1>Mensk Castle</h1>
    <p> <!-- Don't display this <p> if using a phone-sized device -->
        Passing on the drawbridge over the piranha infested moat makes you nervous, but the view from within the walls is worth it! 
        In front of you is a giant and beautiful statue of the king. Beyond that is the inner castle Gatehouse. The center is bustling 
        with activity as people make their way to a busy courtyard to your right. To your left is a far quieter, and more heavily 
        patrolled, area called the Royal Garden.
    </p>
    <div class="row mt25">
        <div class="col-md-4">
            <ul class="nav-list">
                <li class="nav-list_header bg-rd">Royal Gardens</li>
                <li><a href="{{ url('/mensk/castle/fountain') }}"><img src="{{ URL::asset('images/icons/potion-green.png') }}" alt="..." class="img-icon mr5">Great Fountain</a></li>
                <li><a href="{{ url('/mensk/castle/heroes') }}"><img src="{{ URL::asset('images/icons/blacksmith.png') }}" alt="..." class="img-icon mr5">Path of Heroes</a></li>
                <li><a href="{{ url('/mensk/castle/dungeon') }}"><img src="{{ URL::asset('images/icons/Essence_03.png') }}" alt="..." class="img-icon mr5">Dungeon</a></li>
            </ul>
        </div>
        <div class="col-md-4">
            <ul class="nav-list">
                <li class="nav-list_header bg-gld">Castle</li>
                <li><a href="{{ url('/mensk/castle/gate') }}"><img src="{{ URL::asset('images/icons/metal_sword.png') }}" alt="..." class="img-icon mr5">The Inner Gate</a></li>
                <li><a href="{{ url('/mensk/castle/guard') }}"><img src="{{ URL::asset('images/icons/Book_00.png') }}" alt="..." class="img-icon mr5">Guard Tower</a></li>
            </ul>
        </div>
        <div class="col-md-4">
            <ul class="nav-list">
                <li class="nav-list_header bg-bl">Courtyard</li>
                <li><a href="{{ url('/mensk/castle/trader') }}"><img src="{{ URL::asset('images/icons/metal_sword.png') }}" alt="..." class="img-icon mr5">Fancy Trader</a></li>
                <li><a href="{{ url('/mensk/castle/cathedral') }}"><img src="{{ URL::asset('images/icons/mine.png') }}" alt="..." class="img-icon mr5">The Cathedral</a></li>
                <li><a href="{{ url('/mensk/castle/gems') }}"><img src="{{ URL::asset('images/icons/metal_chest_plate.png') }}" alt="..." class="img-icon mr5">Gem Dealer</a></li>             
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