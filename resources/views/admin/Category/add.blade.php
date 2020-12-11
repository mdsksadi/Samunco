@extends('admin.master')
@push('css')
<style>
	.error{
	    font-weight: bold !important;
	    color: red !important;
	}
</style>
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
										Add Category
									</div>
									<div class="card-block">
										<div class="row">
											<div class="col-md-12">
												<form id="categoryForm" method="post" enctype="multipart/form-data" action="{{ url('/admin/categories') }}">
													@csrf
													<div class="form-group">
														<label for="exampleInputEmail1">Name</label>
														<input name="name" value="{{ old('name') }}" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Category Name">
														@if($errors->has('name'))
											                <span class="help-block">
											                  <strong class="text-danger">{{ $errors->first('name') }}</strong>
											                </span>
										                @endif
													</div>
													<div class="form-group">
														<label for="exampleInputPassword1">Description</label>
														<textarea name="description" value="{{ old('description') }}" class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Enter Category Description"></textarea>
														@if($errors->has('description'))
											                <span class="help-block">
											                  <strong class="text-danger">{{ $errors->first('description') }}</strong>
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
	<script src="{{ asset('public/datta-able/plugins/fileupload/js/dropzone-amd-module.min.js')}}"></script>
	<script src="{{ asset('public/datta-able/plugins/select2/js/select2.full.min.js')}}"></script>
	<script src="{{ asset('public/datta-able/plugins/multi-select/js/jquery.quicksearch.js')}}"></script>
	<script src="{{ asset('public/datta-able/plugins/multi-select/js/jquery.multi-select.js')}}"></script>
	<script src="{{ asset('public/datta-able/js/pages/form-select-custom.js')}}"></script>
	<script src="{{ asset('public/js/jquery.validate.js')}}"></script>
    <script>
        $("#categoryForm").validate({
            debug: true,
            rules: {
                name: {
                    required: true,
                },
                description: {
                    required: true,
                }
            }
        });
    </script>
@endpush