@extends('layouts.gamewrapper')

@section('content')
<div class="container-fluid game-container">
    <div class="row">
        <div class="col-md-6">
            <h1>{{ $shop->name }}</h1>
            <p>{{ $shop->welcome_message }}</p>
          </div>
    </div>
    <div class="row">
        <div class="col-lg-5">
             <table border='1' cellspacing='0' cellpadding='0' align='left' class="table-striped table item-list">
                <thead>
                    <th width='130' align='center'><b>Weapons</b></th>
                    <th width='50' align='center'>Cost</th>
                    <th width='30' align='center'> </th>
                </thead>
                @foreach($weapons as $product)
                <tr>
                    <td width='110'>
                        <img src="{{ URL::to('/images/' . $product->image) }}" alt='...' class='img-icon mr5'>
                        <a href='#' data-toggle='collapse' data-target='#demo{{ $product->product_id }}' class='accordion-toggle'>{{ $product->name }}</a>
                    </td>
                    <td width='40' align='left'>{{ $product->cost }} {{ $product->currency }}</td>
                    <td width='30' align='center'>
                        
                        <a href="{{ url(request()->path().'/'.$product->product_id) }}" class='action-btn-sm btn'>Buy</a>
                        
                        
                        
                    </td>
                </tr>
                <tr >
                    <td colspan='6' class='hiddenRow'>
                        <div class='accordian-body collapse' id='demo{{ $product->product_id }}'>
                            <h3>Description:</h3>
                            {!! html_entity_decode($product->description) !!}

                            <hr>
                            <h3>Weapon Stats</h3>
                            Damage: {{ $product->damage_min }} - {{ $product->damage_max }}<br>
                            Slotted: 
                            @if($product->character_gem_id)
                                Yes
                            @else
                                No
                            @endif                      
                            <hr>
                            <h3>Weight:</h3>
                            {{ $product->weight }} lbs
                        </div> 
                    </td>
                </tr>
                @endforeach
            </table>
         </div>
         <div class="col-lg-5">
            <table border='1' cellspacing='0' cellpadding='0' align='left' class="table-striped table item-list">
                <thead>
                    <th width='130' align='center'><b>Armor</b></th>
                    <th width='50' align='center'>Cost</th>
                    <th width='30' align='center'> </th>
                </thead>
    
                @foreach($armors as $product)
                <tr>
                    <td width='110'>
                        <img src="{{ URL::to('/images/' . $product->image) }}" alt='...' class='img-icon mr5'>
                        <a href='#' data-toggle='collapse' data-target='#demo{{ $product->product_id }}' class='accordion-toggle'>{{ $product->name }}</a>
                    </td>
                    <td width='40' align='left'>{{ $product->cost }} {{ $product->currency }}</td>
                    <td width='30' align='center'>
                        <a href="{{ url(request()->path().'/'.$product->product_id) }}" class='action-btn-sm btn'>Buy</a>
                    </td>
                </tr>
                <tr >
                    <td colspan='6' class='hiddenRow'>
                        <div class='accordian-body collapse' id='demo{{ $product->product_id }}'>
                            <h3>Description:</h3>
                            {!! html_entity_decode($product->description) !!}
                            <hr>
                            <h3>Armor Stats</h3>
                            Defense: {{ $product->defense }}<br>
                            Slotted: 
                            @if($product->character_gem_id)
                                Yes
                            @else
                                No
                            @endif
                            <hr>
                            <h3>Weight:</h3>
                            {{ $product->weight }} lbs
                        </div> 
                    </td>
                </tr>
                @endforeach
            
            </table>
       </div>
   </div>
</div>
@endsection
