@extends('admin.admin_master')
@section('admin')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

   
	  <div class="container-full">
		<!-- Content Header (Page header) -->
		  

		<!-- Main content -->
		<section class="content">
 
		 <!-- Basic Forms -->
		  <div class="box">
			<div class="box-header with-border">
			  <h4 class="box-title">Add Services </h4>
			   
			</div>
			<!-- /.box-header -->
			<div class="box-body">
			  <div class="row">
				<div class="col">

  <form method="post" action="{{ route('content-store') }}" enctype="multipart/form-data" >
		 	@csrf

	<div class="row">
	 <div class="col-12">	


		<div class="row"> <!-- start 1st row  -->
		

			<div class="col-md-6">

				 <div class="form-group">
	<h5>Category Select <span class="text-danger">*</span></h5>
	<div class="controls">
		<select name="category_id" class="form-control" required="" >
			<option value="" selected="" disabled="">Select Category</option>
			@foreach($categories as $category)
 <option value="{{ $category->id }}">{{ $category->category_name }}</option>	
			@endforeach
		</select>
		@error('category_id') 
	 <span class="text-danger">{{ $message }}</span>
	 @enderror 
	 </div>
		 </div>
				
			</div> <!-- end col md 4 -->


			<div class="col-md-6">

				 <div class="form-group">
	<h5>Sub Category Select <span class="text-danger">*</span></h5>
	<div class="controls">
		<select name="subcategory_id" class="form-control" required="" >
			<option value="" selected="" disabled="">Select SubCategory</option>
			 
		</select>
		@error('subcategory_id') 
	 <span class="text-danger">{{ $message }}</span>
	 @enderror 
	 </div>
		 </div>
				
			</div> <!-- end col md 4 -->
			
		</div> <!-- end 1st row  -->



<div class="row"> <!-- start 2nd row  -->
		

			<div class="col-md-6">

				 <div class="form-group">
			<h5>Breadcrumb Header <span class="text-danger">*</span></h5>
			<div class="controls">
				<input type="text" name="product_name_en" class="form-control" required="">
     @error('product_name_en') 
	 <span class="text-danger">{{ $message }}</span>
	 @enderror
	 	  </div>
		</div>
				
			</div> <!-- end col md 6 -->


			<div class="col-md-6">

<div class="form-group">
	<h5>Breadcrumb Banner <span class="text-danger">*</span></h5>
	<div class="controls">
<input type="file" name="product_thambnail" class="form-control" onChange="mainThamUrl(this)" required="" >
@error('product_thambnail') 
<span class="text-danger">{{ $message }}</span>
@enderror
<img src="" id="mainThmb">
	  </div>
</div>
		 
		
	</div> <!-- end col md 6 -->


			
		</div> <!-- end 2nd row  -->


		<div class="row"> <!-- start 3rd row  -->
	
		
		
		<div class="col-md-4">

				<div class="form-group">
				<h5>Service Title <span class="text-danger">*</span></h5>
				<div class="controls">
				<input type="text" name="product_name_en" class="form-control" required="">
				@error('product_name_en') 
				<span class="text-danger">{{ $message }}</span>
				@enderror
				</div>
				</div>

		</div> <!-- end col md 4 -->
		
		<div class="col-md-4">

				<div class="form-group">
					<h5>Service Banner <span class="text-danger">*</span></h5>
					<div class="controls">
				<input type="file" name="product_thambnail" class="form-control" onChange="mainThamUrl(this)" required="" >
				@error('product_thambnail') 
				<span class="text-danger">{{ $message }}</span>
				@enderror
				<img src="" id="mainThmb">
					</div>
				</div>
		 
		
	</div> <!-- end col md 4 -->
		
	<div class="col-md-4">

			<div class="form-group">
				<h5>Short Description  <span class="text-danger">*</span></h5>
				<div class="controls">
			<textarea name="short_descp_en" id="textarea" class="form-control" required placeholder="Textarea text"></textarea>     
				</div>
			</div>
					
	</div> <!-- end col md 4 --> 
			
		</div> <!-- end 3rd row  -->




		 
	 
<div class="row"> <!-- start 3rd row  -->
	

			<div class="col-md-12">

	     <div class="form-group">
			<h5>Long Description <span class="text-danger">*</span></h5>
			<div class="controls">
	<textarea id="editor2" name="long_descp_hin" rows="10" cols="80">
		Long Description 
						</textarea>       
	 		 </div>
		</div>
				 
				
			</div> <!-- end col md 12 -->		 
			
		</div> <!-- end 3rd row  -->

	 
	 <hr>
 


	<div class="row">






						 
						<div class="text-lg-center">
<input type="submit" class="btn btn-primary  " value="Add Service">
						</div>
					</form>

				</div>
				<!-- /.col -->
			  </div>
			  <!-- /.row -->
			</div>
			<!-- /.box-body -->
		  </div>
		  <!-- /.box -->

		</section>
		<!-- /.content -->
	  </div>
 
 <script type="text/javascript">
      $(document).ready(function() {
        $('select[name="category_id"]').on('change', function(){
            var category_id = $(this).val();
            if(category_id) {
                $.ajax({
                    url: "{{  url('/category/subcategory/ajax') }}/"+category_id,
                    type:"GET",
                    dataType:"json",
                    success:function(data) {
                    	$('select[name="subsubcategory_id"]').html('');
                       var d =$('select[name="subcategory_id"]').empty();
                          $.each(data, function(key, value){
                              $('select[name="subcategory_id"]').append('<option value="'+ value.id +'">' + value.subcategory_name_en + '</option>');
                          });
                    },
                });
            } else {
                alert('danger');
            }
        });
 $('select[name="subcategory_id"]').on('change', function(){
            var subcategory_id = $(this).val();
            if(subcategory_id) {
                $.ajax({
                    url: "{{  url('/category/sub-subcategory/ajax') }}/"+subcategory_id,
                    type:"GET",
                    dataType:"json",
                    success:function(data) {
                       var d =$('select[name="subsubcategory_id"]').empty();
                          $.each(data, function(key, value){
                              $('select[name="subsubcategory_id"]').append('<option value="'+ value.id +'">' + value.subsubcategory_name_en + '</option>');
                          });
                    },
                });
            } else {
                alert('danger');
            }
        });
 
    });
    </script>


<script type="text/javascript">
	function mainThamUrl(input){
		if (input.files && input.files[0]) {
			var reader = new FileReader();
			reader.onload = function(e){
				$('#mainThmb').attr('src',e.target.result).width(80).height(80);
			};
			reader.readAsDataURL(input.files[0]);
		}
	}	
</script>



@endsection