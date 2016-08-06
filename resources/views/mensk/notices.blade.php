@extends('layouts.gamewrapper')

@section('content')
<div class="container-fluid game-container">
    <h1>Notices</h1>
    <p>
        You trace along the book titles, creating a dusty trail, while you scan for one book in particular.<br>
        A title catches your eye and your finger taps on it before you haul it off the shelf and onto a table.
    </p>
    <div class="row">
        <div class="col-md-10">
            <table cellspacing='0' cellpadding='0' border='0' class="table-striped table item-list">
                <thead>
                    <th width='150'>Name</th>
                    <th width='200'>Description</th>
                    <th width='50'>Difficulty</th>
                    <th width='50'>Category</th>
                </thead>
                @foreach($quests as $quest)
                <tr style='border-bottom: solid black 1px;' class='clickable-row' data-href="{{ url('/mensk/notices/'.$quest->id) }}">
                    <td align='center'>{{ $quest->name }}</td>
                    <td align='center'>{{ $quest->description }}</td>
                    <td align='center'>{{ $quest->difficulty }}</td>
                    <td align='center'>
	                    <img src="images/icons/{{ $quest->icon }}"></td>
                </tr>
                @endforeach
            </table>
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