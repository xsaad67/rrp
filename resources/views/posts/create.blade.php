@extends('layouts.main')

@section('css')
<link rel="stylesheet" type="text/css" href="{{ asset('css/bt-tag.css') }}">
<style type="text/css">

	.form{
		padding:25px;
	}

	.uploader {
		position:relative; 
		overflow:hidden; 
		width:100%; 
		height:350px; 
		background:#f3f3f3; 
		border:2px dashed #e8e8e8;
	}

	#filePhoto{
	    position:absolute;
	    width:100%;
	    height:400px;
	    top:-50px;
	    left:0;
	    z-index:2;
	    opacity:0;
	    cursor:pointer;
	    display:block;
	    margin:auto;
	}

	.uploader img{
	    /*position:absolute;*/
	    width:400px;
	    height:352px;
	    top:-1px;
	    left:-1px;
	    z-index:1;
	    border:none;
	    background-size:cover;
	    background-position:center center;
	    display:block;
	    margin:auto;

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
					<form method="POST" class="form" action="{{ action('PostController@store') }}" enctype="multipart/form-data">
						@csrf
						
						<div class="form-group">
							<input class="form-control" name="title" placeholder="Title" value="{{ old('title') }}">

							@if ($errors->has('title'))
			                    <strong>{{ $errors->first('title') }}</strong>
			                @endif
						</div>

						<div class="form-group">
							<div class="uploader" onclick="$('#filePhoto').click()">
							    <img src="{{asset('images/custom/placeholder.png')}}" />
							    <input type="file" name="image"  id="filePhoto" />
							</div>
							@if ($errors->has('image'))
			                    <strong>{{ $errors->first('image') }}</strong>
			                @endif
						</div>


						<div class="form-group">
							<input type="text" class="form-control bootstrap-tagsinput" name="tags" data-role="tagsinput" placeholder="Enter at least 1 tag" value="{{ old('tags') }}" />
							
							@if ($errors->has('tags'))
			                    <strong>{{ $errors->first('tags') }}</strong>
			                @endif
						</div>
						
						<div class="text-center">
							{{-- <button type="submit" class="btn btn-warning btn-lg mt-1">
								Upload Post
							</button> --}}
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
	
@endsection


@section('js')

<script src="{{ asset('js/preview.min.js') }}"></script>
<script src="{{ asset('js/tagsinput.js') }}"></script>
<script>


	
$(function(){
	// $('form input').on('keypress', function(e) {
	//     return e.which !== 13;
	// });
	var imageLoader = document.getElementById('filePhoto');
	 imageLoader.addEventListener('change', handleImage, false);

	function handleImage(e) {
	    var reader = new FileReader();
	    reader.onload = function (event) {
	        $('.uploader img').attr('src',event.target.result).show();
	    }
	    reader.readAsDataURL(e.target.files[0]);
	}	

	// $(function.e(val)){
	// 	echo "lol";
	// }
});

</script>

@endsection



