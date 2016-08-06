@extends('layouts.gamewrapper')

@section('content')
<div class="container-fluid game-container">
    <h1>Public Records</h1>
    <p>
        You follow the signs to an area labeled "Public Records".<br>
        Although the section isn't very large, the books are old and covered with dust.
    </p>
    <div class="row">
        <div class="col-md-10">
            <table cellspacing='0' cellpadding='0' border='0' class="table-striped table item-list">
                <thead>
                    <th width='150'>Title</th>
                    <th width='300'>Description</th>
                </thead>               
                <tr class='clickable-row' data-href="{{ url('/mensk/library/citizens') }}">
                    <td>Citizens of Mensk</td>
                    <td>An active directory of current citizen.</td>
                </tr>
                <tr class='clickable-row' data-href="{{ url('/mensk/library/clans') }}">
                    <td>Registered Clans</td>
                    <td>A list of all clans registered with Mensk</td>
                </tr>
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