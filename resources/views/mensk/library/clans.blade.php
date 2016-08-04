@extends('layouts.gamewrapper')

@section('content')
<div class="container-fluid game-container">
    <h1>Clan Registry</h1>
    <p>
        You trace along the book titles, creating a dusty trail, while you scan for one book in particular.<br>
        A title catches your eye and your finger taps on it before you haul it off the shelf and onto a table.
    </p>
    <p>
        You begin to thumb through the pages.
    </p>
    <div class="row">
        <div class="col-md-10">
            <table cellspacing='0' cellpadding='0' border='0' class="table-striped table item-list">
                <thead>
                    <th width='140'>
                       Name
                    </th>
                    <th width='100'>
                        Owner
                    </th>
                    <th width='100'>
                        Co-Owner
                    </th>
                    <th width='30'>
                        Level
                    </th>
                    <th width='50'>
                        Points
                    </th>
                    <th width='30'>
                        Tax
                    </th>
                    <th width='50'>
                        Members
                    </th>
                </thead>
                @foreach($clans as $clan)
                <tr style='border-bottom: solid black 1px;'>
                    <td><a href="{{ url('/clan/view/'.$clan->id) }}">{{ $clan->name }}</a></td>
                    <td align='center'>{{ $clan->character_id }}</td>
                    <td align='center'>{{ $clan->name }}</td>
                    <td align='center'>{{ $clan->level }}</td>
                    <td align='center'>{{ $clan->points }}</td>
                    <td align='center'>{{ $clan->tax }}</td>
                    <td align='center'>{{ $clan->tax }}</td>
                </tr>
                @endforeach
            </table>
        </div>
    </div>
    <div class="row">
        <div class="col-md-2 col-md-offset-5">
            <br><br>
            <a href="{{ url('/mensk/library/clan/register') }}" class="action-btn-sm btn">Register Clan</a>&nbsp;&nbsp;&nbsp;
            <a href={{ url('/mensk/library/records') }} class="btn-secondary btn">Return to Records</a>
        </div>
    </div>
</div>

@endsection