@extends('layouts.gamewrapper')

@section('content')
<div class="container-fluid game-container">
    <h1>Citizen of Mensk</h1>
    <p>
    	You trace along the book titles, creating a dusty trail, while you scan for one book in particular.<br>
		A title catches your eye and your finger taps on it before you haul it off the shelf and onto a table.
    </p>
    <p>
        You begin to thumb through the pages.
    </p>
    <div class="row">
    	<div class="col-md-6">
            <table cellspacing='0' cellpadding='0' border='0' class="table-striped table item-list">
                <thead>
                    <th width='50'>ID</th>
                    <th width='100'>Name</th>
                    <th width='100'>Rank</th>
                    <th width='50'>Level</th>
                </thead>
                @foreach($characters as $char)
                <tr class='clickable-row' data-href="{{ url('/character/'.$char->id) }}">
					<td>{{ $char->id }}</td>
					<td>{{ $char->name }}</td>
					<td>{{ $char->rank }}</td>
					<td>{{ $char->level }}</td>
				</tr>
				@endforeach
            </table>
        </div>
    </div>
    <div class="row">
        <div class="col-md-2 col-md-offset-5">
            <br><br>           
            <a href="{{ url('/mensk/library/records') }}" class="btn-secondary btn">Return to Records</a>
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