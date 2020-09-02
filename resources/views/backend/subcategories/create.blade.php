@extends('backendtemplate')
@section('content')
<div class="container-fluid">
	{{-- page heading --}}
	<div class="d-sm-flex align-items-center justify-content-center mb-4">
		<h1 class="h3 mb-0 text-gray-800">Subcategory Create Form</h1>
	</div>
	<div class="container">
		<div class="row">
			<div class="col-md-12">

				<form action="{{route('subcategories.store')}}" method="POST" enctype="multipart/form-data">
					@csrf
					
					
					<div class="form-group row">
						<label for="name" class="col-sm-2 col-form-label">Name</label>
						<div class="col-sm-6">
							<input type="text" name="name" class="form-control col-sm-6" >
							<span class="text-danger">{{$errors->first('name')}}</span>
						</div>
					</div>
					<div class="form-group row">
						<label for="category" class="col-sm-2 col-form-label">Category</label>
						<div class="col-sm-3">
							<select class="form-control form-control-md" id="inputcategory" name="category">
								<optgroup label="Choose Category">
									@foreach($categories as $category)
									<option value="{{$category->id}}">
										{{$category->name}}
									</option>
									@endforeach
								</optgroup>
							</select>
							<span class="text-danger">{{$errors->first('category')}}</span>
						</div>
					</div>
					
					
					
					
					<div class="form-group row">

						<div class="col-sm-10">
							<input type="submit" name="btnsubmit" value="Create" class="btn btn-success" >
						</div>
					</div>


				</form>
			</div>
		</div>

	</div>
</div>
@endsection