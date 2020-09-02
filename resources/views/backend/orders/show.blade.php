@extends('backendtemplate')
@section('content')
<div class="container-fluid">
	{{-- page heading --}}
	<div class="row">
	<div class="col-md-12 mb-3">
		<h1 class="h4 mb-0 text-gray-800">Voucherno:{{$order->voucherno}}</h1>
		<h1 class="h4 mb-0 text-gray-800">Orderdate:{{$order->orderdate}}</h1>
		
	</div>
	
	
	
	<div class="container">
		<div class="row">
			<div class="col-md-12">

				
					@csrf
					
					<table class="table table-bordered ">
						<thead class="table-dark">
							<tr>

								<th scope="col">No</th>
								<th scope="col">Item Name</th>
								<th scope="col">Price</th>
								<th scope="col">Qty</th>
								<th scope="col">Subtotal</th>
								
							</tr>
						</thead>
						<tbody>
							@php 
							$i=1;
							$total=0;
							@endphp
							@foreach ($order->items as $item)
							@php
							$subtotal=$item->price*$item->pivot->qty;
							$total+=$subtotal;
							@endphp

							<tr>
								<td>{{$i++}}</td>
								
								<td>{{$item->name}}</td>
								<td>{{$item->price}}</td>
								<td>{{$item->pivot->qty}}</td>
								<td>{{$subtotal}}</td>
								
								
								
							</td>
							</tr>
							@endforeach
							<tr class="bg-dark text-white">
								<td colspan="4">Total:</td>
								<td>{{$total}}MMK</td>
							</tr>
						</tbody>
					</table>
							</div>
		</div>

	</div>
</div>
@endsection