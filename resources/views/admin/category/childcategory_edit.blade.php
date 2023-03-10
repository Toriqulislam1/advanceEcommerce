@extends('admin.admin_master')
@section('admin')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

  <!-- Content Wrapper. Contains page content -->

	  <div class="container-full">
		<!-- Content Header (Page header) -->


		<!-- Main content -->
		<section class="content">
		  <div class="row">






<!--   ------------ Add Sub Sub Category Page -------- -->


          <div class="col-12">

			 <div class="box">
				<div class="box-header with-border">
				  <h3 class="box-title">Edit Child Category </h3>
				</div>
				<!-- /.box-header -->
				<div class="box-body">
					<div class="table-responsive">


 <form method="post" action="{{ route('childcategory.update') }}" >
	 	@csrf

	<input type="hidden" name="id" value="{{ $childcategories->id }}">				   

	 <div class="form-group">
	<h5>Category Select <span class="text-danger">*</span></h5>
	<div class="controls">
		<select name="category_id" class="form-control"  >
			<option value="" selected="" disabled="">Select Category</option>
			@foreach($categories as $category)
			<option value="{{ $category->id }}" {{ $category->id == $childcategories->category_id ? 'selected':'' }} >{{ $category->category_name }}</option>	
			@endforeach
		</select>
		@error('category_id') 
	 <span class="text-danger">{{ $message }}</span>
	 @enderror 
	 </div>
		 </div>


		  <div class="form-group">
	<h5>SubCategory Select <span class="text-danger">*</span></h5>
	<div class="controls">
		<select name="subcategory_id" class="form-control"  >
			<option value="" selected="" disabled="">Select SubCategory</option>

			 @foreach($subcategories as $child)
			<option value="{{ $child->id }}" {{ $child->id == $childcategories->subcategory_id ? 'selected':'' }} >{{ $child->subcategory_name }}</option>	
			@endforeach
		</select>
		@error('subcategory_id') 
	 <span class="text-danger">{{ $message }}</span>
	 @enderror 
	 </div>
		 </div>


	<div class="form-group">
		<h5> Child Category English <span class="text-danger">*</span></h5>
		<div class="controls">
	 <input type="text" name="childcategory_name" class="form-control" value="{{ $childcategories->childcategory_name }}" >
     @error('childcategory_name') 
	 <span class="text-danger">{{ $message }}</span>
	 @enderror 
	  </div>
	</div>




			 <div class="text-xs-right">
	<input type="submit" class="btn btn-rounded btn-primary mb-5" value="Update">					 
						</div>
					</form>





					</div>
				</div>
				<!-- /.box-body -->
			  </div>
			  <!-- /.box --> 
			</div>




		  </div>
		  <!-- /.row -->
		</section>
		<!-- /.content -->

	  </div>





@endsection 