@extends('admin.master')
@push('css')
	<style>
		.error{
			font-weight: bold;
			color: red;
		}
	</style>
	<!-- <link rel="stylesheet" href="{{ asset('public/datta-able/css/pages/fileupload.css')}}"> -->
	<link rel="stylesheet" href="{{ asset('public/datta-able/plugins/select2/css/select2.min.css')}}">
@endpush
@section('content')
<div class="pcoded-main-container">
	<div class="pcoded-wrapper">
		<div class="pcoded-content">
			<div class="pcoded-inner-content">
				<div class="main-body">
					<div class="page-wrapper">
						<div class="row">
							<div class="col-md-12">
								<div class="card">
									<div class="card-header">
										Add Product
									</div>
									<div class="card-block">
										<div class="row">
											<div class="col-md-12">
												<form id="productForm" method="post" enctype="multipart/form-data" action="{{ url('/admin/product/add') }}">
													@csrf
													<div class="form-group">
														<label for="exampleInputEmail1">Name</label>
														<input name="name" value="{{ old('name') }}" type="text" class="form-control"  aria-describedby="emailHelp" placeholder="Enter Product Name">
														@if($errors->has('name'))
											                <span class="help-block">
											                  <strong class="text-danger">{{ $errors->first('name') }}</strong>
											                </span>
										                @endif
													</div>
													<div class="form-group ">
														<label for="exampleInputEmail1">Category</label>
														<select name="category_id" value="{{ old('category_id') }}" class="js-example-placeholder-multiple col-sm-12">
															@foreach ($categories as $category)
																<option value="{{ $category->id }}">{{ $category->name }}</option>
															@endforeach
														</select>
														@if($errors->has('category_id'))
											                <span class="help-block">
											                  <strong class="text-danger">{{ $errors->first('category_id') }}</strong>
											                </span>
										                @endif
													</div>
													<div class="form-group">
														<label for="exampleInputPassword1">Description</label>
														<textarea name="description" value="{{ old('description') }}" class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Enter Product Description"></textarea>
														@if($errors->has('description'))
											                <span class="help-block">
											                  <strong class="text-danger">{{ $errors->first('description') }}</strong>
											                </span>
										                @endif
													</div>
													<div class="form-group">
														<label for="exampleInputEmail1">Amount</label>
														<input name="amount" value="{{ old('amount') }}" type="number" step="any" class="form-control"  aria-describedby="emailHelp" placeholder="Enter Product Amount">
														@if($errors->has('amount'))
											                <span class="help-block">
											                  <strong class="text-danger">{{ $errors->first('amount') }}</strong>
											                </span>
										                @endif
													</div>
													
													<div class="form-group ">
														<label for="exampleInputEmail1">Image</label>
														<div class="dropzone fallback">
														    <input name="image" type="file" />
														 </div>
														 @if($errors->has('image'))
											                <span class="help-block">
											                  <strong class="text-danger">{{ $errors->first('image') }}</strong>
											                </span>
										                @endif
													</div>
													
													<button type="submit" class="btn btn-primary">Create</button>
												</form>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
@push('scripts')
	<!-- <script src="{{ asset('public/datta-able/plugins/fileupload/js/dropzone-amd-module.min.js')}}"></script> -->
	<script src="{{ asset('public/datta-able/plugins/select2/js/select2.full.min.js')}}"></script>
	<script src="{{ asset('public/datta-able/plugins/multi-select/js/jquery.quicksearch.js')}}"></script>
	<script src="{{ asset('public/datta-able/plugins/multi-select/js/jquery.multi-select.js')}}"></script>
	<script src="{{ asset('public/datta-able/js/pages/form-select-custom.js')}}"></script>

	<script src="{{ asset('public/js/jquery.validate.js')}}"></script>
	<!-- <script src="{{ asset('public/js/jquery.additional-methods.min.js')}}"></script> -->
	
    <script>
		
		
        // $("#productForm").validate({
        //     debug: true,
        //     rules: {
        //         category_id: {
        //             required: true,
        //         },
        //         name: {
        //             required: true,
        //         },
		// 		description: {
        //             required: true,
        //         },
        //         image: {
        //             required: true,
		// 			// extension: "jpg|png|jpeg"
        //         }
        //     }
        // });
    </script>
@endpush