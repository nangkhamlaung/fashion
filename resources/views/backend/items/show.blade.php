@extends('backendtemplate')
@section('content')
<div class="container-fluid">
	{{-- page heading --}}
	<div class="row">
		<div class="col-md-12 mb-3">
			<h1 class="h4 mb-0 text-gray-800">Item Codeno:{{$item->codeno}}</h1>
			<h1 class="h4 mb-0 text-gray-800">Item Name:{{$item->name}}</h1>

		</div>



		<div class="container">
			<div class="row">
				<div class="col-md-12">


					@csrf
					
					<table class="table table-bordered ">
						<thead class="table-dark">
							<tr>

								<th scope="col">No</th>
								<th scope="col">Subcategory</th>
								<th scope="col">Brand</th>
								<th scope="col">Item Price</th>
								<th scope="col">Item Discount</th>
								
							</tr>
						</thead>
						<tbody>
							@php 
							$i=1;
							
							@endphp


							<tr>
								<td>{{$i++}}</td>
								
								<td>{{$item->subcategory->name}}</td>
								<td>{{$item->brand->name}}</td>
								<td>{{$item->price}}</td>
								<td>{{$item->discount}}</td>
								
								
								
								
							</td>
						</tr>
						

					</tbody>
				</table>
			</div>
		</div>

	</div>
</div>
@endsection