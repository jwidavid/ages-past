@extends('layouts.gamewrapper')

@section('content')
<div class="container-fluid game-container">
    <div class="row">
        <div class="col-md-10">
            <h1>A Book Title</h1>
            <p>Topic Goes Here : Description goes here</p>
        </div>
        <div class="col-md-6">
            Body of the book goes here. The body will be formatted in json for the 
            purpose of distinguishing chapters. In other words, we'll be using
            pagination to separate chapters. 
        </div>
        <div class="col-md-6">
            A layout like this might be cool, like actual pages of a book. Then if
            the screen is too small, just stack them. 
        </div>
    </div>
    <div class="row">
        <div class="col-md-10" style='text-align:center'>
            <br><br>
            Pagination stuff should go here, plust a button link back to their previous page.
        </div>
    </div>
</div>
@endsection