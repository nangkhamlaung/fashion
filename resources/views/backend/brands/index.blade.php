@extends('backendtemplate')
@section('content')
<div class="container-fluid">
	{{-- page heading --}}
	<div class="d-sm-flex align-items-center justify-content-between mb-4">
		<h1 class="h3 mb-0 text-gray-800">Brand List</h1>
		<div class="row">
			<div class="col-md-12">
		<a href="{{route('brands.create')}}" class="btn btn-info" >Add New</a>
			</div>
		</div>
	</div>
	
	
	
	<div class="container">
		<div class="row">
			<div class="col-md-12">

				<form action="{{route('brands.store')}}" method="POST" enctype="multipart/form-data">
					@csrf
					
					<table class="table table-bordered ">
						<thead class="table-dark">
							<tr>
								<th scope="col">No</th>
								
								<th scope="col">Name</th>
								
								<th scope="col">Photo</th>
								<th scope="col">Actions</th>
							</tr>
						</thead>
						<tbody>
							@php 
							$i=1;
							@endphp
							@foreach ($brands as $brand)
							<tr>
								<td>{{$i++}}</td>
								
								<td>{{$brand->name}}</td>
								<td>{{$brand->photo}}</td>
								<td><a href="" class="btn btn-info">Detail</a>
								<a href="{{route('brands.edit',$brand->id)}}" class="btn btn-warning">Edit</a>
								<a href="" class="btn btn-danger">Delete</a>
							</td>
							</tr>
							@endforeach
						</tbody>
					</table>
				</form>
			</div>
		</div>

	</div>
</div>
@endsection