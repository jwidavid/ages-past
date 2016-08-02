@extends('layouts.gamewrapper')

@section('content')
<!--Merchant Template-->
<div class="container-fluid game-container">
    <h1>Merchant</h1>
    <p>Welcome to my shop, take your time.</p>
    <div class="clearfix">
        <table border='1' cellspacing='0' cellpadding='0' align='left' class="table-striped table item-list">
            <thead>
            <th width='200' align='center'><b>Items</b></th>
            <th width='100' align='center'><b>Cost</b></th>
            <th width='30' align='center'> </th>
            </thead>                        

            @foreach($products as $product)
            <tr>
		        <td width='110'>
		            <img src="{{ URL::to('/images/' . $product->image) }}" alt='...' class='img-icon mr5'>
		            <a href='#' data-toggle='collapse' data-target='#demo{{ $product->id }}' class='accordion-toggle'>{{ $product->name }}</a>
		        </td>
		        <td width='40' align='left'>{{ $product->cost }} {{ $product->currency }}</td>
		        <td width='30' align='center'>
		            <a href="{{ url('mensk/merchant/'.$product->id) }}" class='action-btn-sm btn'>Buy</a>
		        </td>
		    </tr>
			<tr >
	            <td colspan='6' class='hiddenRow'>
					<div class='accordian-body collapse' id='demo{{ $product->id }}'>
						<h3>Description:</h3>
						{!! html_entity_decode($product->description) !!}
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
@endsection

