@extends('layouts.gamewrapper')

@section('content')
<div class="container-fluid game-container">
    <h1>{{ $category }}</h1>
    <p>
        You meander your way through the aisles.<br>
        Here you find books on all manner of topics that may, or may not, be relevant to you.
    </p>
    <p>
        @if( isset($message) )
        {{ $message }}
        @endif
    </p>
    <div class="row">
        <div class="col-md-6">
            <table cellspacing='0' cellpadding='0' border='0' class="table-striped table item-list">
                <thead>
                    <th width='100'>Title</th>
                    <th width='100'>Topic</th>
                    <th width='100'>Last Updated</th>
                </thead>
                @foreach($books as $book)
                <tr class='clickable-row' data-href="{{ url('/mensk/library/book/'.$book->id) }}">
                    <td>{{ $book->title }}</td>
                    <td>{{ $book->topic }}</td>
                    <td>{{ $book->updated_at }}</td>
                </tr>
                @endforeach
            </table>
        </div>
    </div>
    <div class="row">
        <div class="col-md-2 col-md-offset-5">
            <br><br>           
            <a href="{{ url('/mensk/library') }}" class="btn-secondary btn">Return to Lobby</a>
        </div>
    </div>
</div>
@endsection

@section('page-script')
<script type="text/javascript">
jQuery(document).ready(function($) {
    $(".clickable-row").click(function() {
        window.document.location = $(this).data("href");
    });
});
</script>
@stop