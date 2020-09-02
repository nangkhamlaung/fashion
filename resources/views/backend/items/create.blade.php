@extends('backendtemplate')
@section('content')
<div class="container-fluid">
	{{-- page heading --}}
	<div class="d-sm-flex align-items-center justify-content-center mb-4">
		<h1 class="h3 mb-0 text-gray-800">Item Create Form</h1>
	</div>
	<div class="container">
		<div class="row">
			<div class="col-md-12">

				<form action="{{route('items.store')}}" method="POST" enctype="multipart/form-data">
					@csrf
					
					<div class="form-group row">
						<label for="codeno" class="col-sm-2 col-form-label">Code NO</label>
						<div class="col-sm-6">
							<input type="text" name="codeno" class="form-control col-sm-6 ">
							<span class="text-danger">{{$errors->first('codeno')}}</span>
						</div>
					</div>
					<div class="form-group row">
						<label for="name" class="col-sm-2 col-form-label">Name</label>
						<div class="col-sm-6">
							<input type="text" name="name" class="form-control col-sm-6" >
							<span class="text-danger">{{$errors->first('name')}}</span>
						</div>
					</div>
					<div class="form-group row">
						<label for="photo" class="col-sm-2 col-form-label">Photo</label>
						<div class="col-sm-6">
							<input type="file" name="photo" class="form-control col-sm-6" >
							<span class="text-danger">{{$errors->first('photo')}}</span>
						</div>
					</div>
					<div class="form-group row">
						<label for="price" class="col-sm-2 col-form-label">Price</label>
						<div class="col-sm-6">
							<input type="number" name="price" class="form-control col-sm-6" >
							<span class="text-danger">{{$errors->first('price')}}</span>
						</div>
					</div>
					<div class="form-group row">
						<label for="discount" class="col-sm-2 col-form-label">Discount</label>
						<div class="col-sm-6">
							<input type="number" name="discount" class="form-control col-sm-6" >

						</div>
					</div>
					<div class="form-group row">
						<label for="description" class="col-sm-2 col-form-label">Description</label>
						<div class="col-sm-6">
							<textarea class="form-control col-sm-6" name="description"></textarea>
							<span class="text-danger">{{$errors->first('description')}}</span>
						</div>
					</div>
					<div class="form-group row">
						<label for="brand" class="col-sm-2 col-form-label">Brand</label>
						<div class="col-sm-3">
							<select class="form-control form-control-md" id="inputBrand" name="brand">
								<optgroup label="Choose Brand">
									@foreach($brands as $brand)
									<option value="{{$brand->id}}">
										{{$brand->name}}
									</option>
									@endforeach
								</optgroup>
							</select>
							<span class="text-danger">{{$errors->first('brand')}}</span>
						</div>
					</div>
					<div class="form-group row">
						<label for="subcategory" class="col-sm-2 col-form-label">Subcategory</label>
						<div class="col-sm-3">
							<select class="form-control form-control-md" id="inputSubcatory" name="subcategory">
								<optgroup label="Choose Subcategory">
									@foreach($subcategories as $subcategory)
									<option value="{{$subcategory->id}}">
										{{$subcategory->name}}
									</option>
									@endforeach
								</optgroup>
							</select>
							<span class="text-danger">{{$errors->first('subcategory')}}</span>
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