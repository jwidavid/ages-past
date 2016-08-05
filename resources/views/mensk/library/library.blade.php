@extends('layouts.gamewrapper')

@section('content')
<div class="container-fluid game-container">
    <div class="row">
        <div class="col-md-6">
            <h1>Town Library</h1>
            <p>Before you stands a massive stone building, the sign above the double wooden doors reads 'Town Library' <i>how original...</i> you think to yourself.</p>
            <p>You notice signs, depicting the different sectors of the library.</p>

        </div>
        <div class="col-md-4">
            <ul class="nav-list">
                <li><a href="{{ url('/mensk/library/info') }}"><img src="{{ URL::asset('images/icons/metal_sword.png') }}" alt="..." class="img-icon mr5">Help Desk</a></li>
                <li><a href="{{ url('/mensk/library/books/records') }}"><img src="{{ URL::asset('images/icons/metal_sword.png') }}" alt="..." class="img-icon mr5">Public Records</a></li>
                <li><a href="{{ url('/mensk/library/books/research') }}"><img src="{{ URL::asset('images/icons/metal_sword.png') }}" alt="..." class="img-icon mr5">Research</a></li>
                <li><a href="{{ url('/mensk/library/books/creative') }}"><img src="{{ URL::asset('images/icons/metal_sword.png') }}" alt="..." class="img-icon mr5">Creative Writings</a></li>
            </ul>
        </div>
    </div>
</div>
@endsection