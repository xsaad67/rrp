@extends('layouts.app')

@section('css')
<link rel="stylesheet" type="text/css" href="{{ asset('css/bt-tag.css') }}">
<style type="text/css">



	.form{
		padding:25px;
	}
	#image-preview {
	  width: 100%;
	  min-height: 400px;
	  height:auto;
	  position: relative;
	  overflow: hidden;
	  background-color: #ffffff;
	  color: #ecf0f1;
	  border: 2px dashed #ccc;
	}
	#image-preview input {
	  line-height: 200px;
	  font-size: 200px;
	  position: absolute;
	  opacity: 0;
	  z-index: 10;
	}
	#image-preview label {
	  position: absolute;
	  z-index: 5;
	  opacity: 0.8;
	  cursor: pointer;
	  background-color: #bdc3c7;
	  width: 200px;
	  height: 50px;
	  font-size: 20px;
	  line-height: 50px;
	  text-transform: uppercase;
	  top: 0;
	  left: 0;
	  right: 0;
	  bottom: 0;
	  margin: auto;
	  text-align: center;
	}
	

</style>
@endsection

@section('content')


<div class="container">
	
	<div class="row">
		<div class="col-lg-9">
			<div class="card">
				<div class="body">
					<h2 class="text-center mt-4">Create Post</h2>
					<form method="POST" action="" class="form" action="{{action('PostController@store')}}">
						
						<div class="form-group">
							<input class="form-control" name="title" placeholder="Title">
						</div>

						<div class="form-group">
							<div id="image-preview">
							  <label for="image-upload" id="image-label">Choose File</label>
							  <input type="file" name="image" id="image-upload" />
							</div>
						</div>

						<div class="form-group">
							<input class="form-control" name="tags" placeholder="Enter to add tag" data-role="tagsinput">
						</div>
						
						<div class="text-center">
							<button type="submit" class="btn btn-warning btn-lg mt-1">
								Upload Post
							</button>
						</div>

					</form>
				</div>
			</div>
		</div>
	</div>
</div>
	
@endsection

@section('js')

<script type="text/javascript" src="{{asset('js/bt-tagsinput.js')}}"></script>
<script src="{{ asset('js/preview.min.js') }}"></script>
<script>
	
$(function(){
	$.uploadPreview({
	    input_field: "#image-upload",   // Default: .image-upload
	    preview_box: "#image-preview",  // Default: .image-preview
	    label_field: "#image-label",    // Default: .image-label
	    label_default: "Choose File",   // Default: Choose File
	    label_selected: "Change File",  // Default: Change File
	    no_label: false                 // Default: false
  	});
});

</script>

@endsection



