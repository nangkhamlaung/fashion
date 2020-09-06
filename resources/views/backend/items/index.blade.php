@extends('backendtemplate')
@section('content')
<div class="container-fluid">
	{{-- page heading --}}
	<div class="d-sm-flex align-items-center justify-content-between mb-4">
		<h1 class="h3 mb-0 text-gray-800">Item List</h1>
		<div class="row">
			<div class="col-md-12">
		<a href="{{route('items.create')}}" class="btn btn-info" >Add New</a>
			</div>
		</div>
	</div>
	
	
	
	<div class="container">
		<div class="row">
			<div class="col-md-12">

				<form action="{{route('items.store')}}" method="POST" enctype="multipart/form-data">
					@csrf
				</form>	
					<table class="table table-bordered ">
						<thead class="table-dark">
							<tr>
								<th scope="col">No</th>
								<th scope="col">Codeno</th>
								<th scope="col">Name</th>
								
								<th scope="col">Price</th>
								<th scope="col">Actions</th>
							</tr>
						</thead>
						<tbody>
							@php 
							$i=1;
							@endphp
							@foreach ($items as $item)
							<tr>
								<td>{{$i++}}</td>
								<td>{{$item->codeno}}</td>
								<td>{{$item->name}}</td>
								<td>{{$item->price}} MMK</td>
								<td>
									<form method="POST" action="{{route('items.destroy',$item->id)}}" onsubmit="return confirm('Are you sure?')">
									@csrf
									@method('DELETE')

									
								
								
									<a href="{{route('items.show',$item->id)}}" class="btn btn-info">
										<i class="fas fa-info"></i>
									</a>

									<a href="{{route('items.edit',$item->id)}}" class="btn btn-warning"><i class="fas fa-edit"></i>
									</a>
									<button class="btn btn-danger">
										<i class="fas fa-trash"></i>
									</button>
								</form>
							</td>
							</tr>
							@endforeach
						</tbody>
					</table>
				
			</div>
		</div>

	</div>
</div>
@endsection