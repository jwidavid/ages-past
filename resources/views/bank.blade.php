@extends('layouts.gamewrapper')

@section('content')
<div class="container-fluid game-container">
    
    <h1>Bank</h1>
    <p>
        <b>Bank Clerk:</b> <em>Welcome to Mensk Bank</em>.
        <br /><br />
        You have:
    </p>
    <ul class="list-unstyled">
        <li>{{ $character->bankRecord->coins }} / {{ $character->bankRecord->coins_max }} Coins</li>
        <li>{{ $character->bankRecord->bronze }} / {{ $character->bankRecord->bronze_max }} Bronze</li>
        <li>{{ $character->bankRecord->silver }} / {{ $character->bankRecord->silver_max }} Silver</li>
        <li>{{ $character->bankRecord->gold }} / {{ $character->bankRecord->gold_max }} Gold</li>
        <li>{{ $character->bankRecord->platinum }} / {{ $character->bankRecord->platinum_max }} Platinum</li>
    </ul>
    <p>
        <a href='mensk_bank.php?action=increase' class="action-btn-sm btn">Increase Bank Max ({BINCCOST} Platinum)</a>
    </p>
    {MESSAGE}
    <div class="row mt25">
        <div class="col-md-4">
            <form action='mensk_bank.php?action=withdraw' method='post' class="form-horizontal">
                
                {{ csrf_field() }}
                
                <div class='form-group'>
                    <label for='dcoins' class="col-sm-2">Coins</label>
                    <div class="col-sm-10">
                        <input type='text' class='form-control' name='coins_deposit' id='coins_deposit'>
                    </div>
                </div>
                <div class='form-group'>
                    <label for='dbronze' class="col-sm-2">Bronze</label>
                    <div class="col-sm-10">
                        <input type='text' class='form-control' name='bronze_deposit' id='bronze_deposit'>
                    </div>
                </div>
                <div class='form-group'>
                    <label for='dsilver' class="col-sm-2">Silver</label>
                    <div class="col-sm-10">
                        <input type='text' class='form-control' name='silver_deposit' id='silver_deposit'>
                    </div>
                </div>
                <div class='form-group'>
                    <label for='dgold' class="col-sm-2">Gold</label>
                    <div class="col-sm-10">
                        <input type='text' class='form-control' name='gold_deposit' id='gold_deposit'>
                    </div>
                </div>
                <div class='form-group'>
                    <label for='dplatinum' class="col-sm-2">Platinum</label>
                    <div class="col-sm-10">
                        <input type='text' class='form-control' name='platinum_deposit' id='platinum_deposit'>
                    </div>
                </div>
                <div class='form-group'>
                    <div class="col-sm-offset-2 col-sm-10">
                        <input type='submit' value='Withdraw' class="pull-right">
                    </div>
                </div>
                
            </form>
        </div>
        <div class="col-md-4">
            <form action='mensk_bank.php?action=deposit' method='post' class="form-horizontal">
                <div class='form-group'>
                    <label for='dcoins' class="col-sm-2">Coins</label>
                    <div class="col-sm-10">
                        <input type='text' class='form-control' name='dcoins' id='dcoins' value='{DCOINS}'>
                    </div>
                </div>
                <div class='form-group'>
                    <label for='dbronze' class="col-sm-2">Bronze</label>
                    <div class="col-sm-10">
                        <input type='text' class='form-control' name='dbronze' id='dbronze' value='{DBRONZE}'>
                    </div>
                </div>
                <div class='form-group'>
                    <label for='dsilver' class="col-sm-2">Silver</label>
                    <div class="col-sm-10">
                        <input type='text' class='form-control' name='dsilver' id='dsilver' value='{DSILVER}'>
                    </div>
                </div>
                <div class='form-group'>
                    <label for='dgold' class="col-sm-2">Gold</label>
                    <div class="col-sm-10">
                        <input type='text' class='form-control' name='dgold' id='dgold' value='{DGOLD}'>
                    </div>
                </div>
                <div class='form-group'>
                    <label for='dplatinum' class="col-sm-2">Platinum</label>
                    <div class="col-sm-10">
                        <input type='text' class='form-control' name='dplatinum' id='dplatinum' value='{DPLATINUM}'>
                    </div>
                </div>
                <div class='form-group'>
                    <div class="col-sm-offset-2 col-sm-10">
                        <input type='submit' value='Deposit' class="pull-right">
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection