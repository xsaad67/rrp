@extends('layouts.app')

@section('css')
	<link rel="stylesheet" type="text/css" href="/css/meme/spectrum.css">
	<link rel="stylesheet" type="text/css" href="/css/meme/jquery-ui.min.css">
	<link rel="stylesheet" type="text/css" href="/css/meme/memegenerator.css">
	<style type="text/css">
		.meme-generator{
			-webkit-box-shadow: 1px 6px 10px 0px rgba(0,0,0,0.75);
			-moz-box-shadow: 1px 6px 10px 0px rgba(0,0,0,0.75);
			box-shadow: 1px 6px 10px 0px rgba(0,0,0,0.75);
			padding:25px;
		}	

		.template-img{
			width:70px;
			height:70px;
			padding:right:15px;
			overflow-x: 
		}

		.memetemplate-holder{
		    height: 70px;
		    overflow: scroll;
		    overflow-y: hidden;
		    white-space: nowrap;
		    margin: 10px 0 -10px;
		}

		.ajMeme-holder{
		    height: 70px;
		    overflow: scroll;
		    overflow-y: hidden;
		    white-space: nowrap;
		    margin: 10px 0 -10px;
		    display:none;
		}
		.mg-toolbox-toggle{
			display:none !important;
		}
		.ui-rotatable-handle {background-color:red;}
		.hidden{
			display:none;
		}

		.ui-rotatable-handle {
			position:relative;
		    height: 16px;
		    width: 16px;
		    cursor: pointer;
		    background-image: url({{ asset('images/custom/rotate.png') }});
		    background-size: 100%;
		    left: 2px;
		    bottom: 2px;
		}

	</style>
@endsection

@section('content')
		
	<div class="container">


		
		<div class="meme-generator">
			<h1 class="title" id="tempTitle">{{ucwords($template->title)}}</h1>
			<label class="btn btn-warning btn-file">
			    Upload your own image <input type="file" style="display: none;" id="imgInp">
			</label>
			<img src="{{$template->templateImage}}" id="current-meme" class="img-fluid">

			<div class="hidden" id="ex">{{ $template->id }}</div>
			<div class="col-8">
				
			</div>

			<div class="memetemplate-holder ">
				@foreach($templates as $template)
					<a href="javascript:void(0);" data-id="{{encrypt($template->id)}}" class="select-meme">
						<img data-src="/imagecache/small/{{$template->fileName}}" class="template-img lazy">
					</a>
				@endforeach
				<a class="btn btn-warning align-items-center" href="/templates">View All Templates</a>
			</div>
		</div>


	</div>
	<div class="loading-generator">
		<div class="modal" id="myModal">

		  <div class="modal-dialog">
		    <div class="modal-content">
		      <!-- Modal Header -->
		      <div class="modal-header">
		        <button type="button" class="close" data-dismiss="modal">&times;</button>
		      </div>

		      <!-- Modal body -->
		      <div class="modal-body">
		      	<div class="text-center">
		        	<img src="{{asset('images/custom/loading.gif')}}" class="img-fluid mx-auto" id="generated">
		    	</div>
		      </div>

		      <!-- Modal footer -->
		      <div class="modal-footer">
		        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
		      </div>
		    </div>
		  </div>

		</div>
	</div>


@endsection

@section('js')
	
	<script src="/js/meme/jquery-ui.min.js"></script>
	<script src="/js/meme/spectrum.js"></script>
	<script type="text/javascript" src="/js/meme/memegenerator.js"></script>
	<script type="text/javascript" src="/js/lazy-load.min.js"></script>
	<script src="{{asset('js/jquery.ui.rotatable.min.js')}}"></script>

	<script>

		function readURL(input) {

		  if (input.files && input.files[0]) {
		    var reader = new FileReader();

		    reader.onload = function(e) {
		      $('#current-meme').attr('src', e.target.result);
		    }

		    reader.readAsDataURL(input.files[0]);
		  }
		}

		$("#imgInp").change(function() {
		  readURL(this);
		  $("#ex").html("");
		});


		$(".meme-generator > img").memeGenerator({
			useBootstrap: true,
			layout: "horizontal",
			previewMode: "canvas",
			dragResizeEnabled: true,
			showAdvancedSettings:false,
			drawingAboveText:true,
			// onInit: function(){
	  //   		$("#layer1").rotatable();
			// }
		});

		
		$(document).ready(function(){

			
			$('.draggableHelper').draggable();
			$('.dragImage').resizable();


			$(".lazy").Lazy({
			    effect: 'show',
			});

			$(".mg-controls").on("click", "button#saveMeme", function(){
				var ex = $("#ex").html();
				$("#generated").attr("src","/images/custom/loading.gif");
				
				$('#myModal').modal({
				   	backdrop: 'static',
	        		keyboard: false
			    });

				var imageDataUrl = $("#current-meme").memeGenerator("save");
				$.ajaxSetup({
				  headers: {
				    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
				  }
				});

				$.ajax({
					url: "{{action('MemeController@store')}}",
					type: "POST",
					data: {image: imageDataUrl,ex:ex},
					dataType: "json",
					success: function(response){
						$("#generated").attr("src",response.file);
					}
				});

			});

		 
			
			

			// $(".meme-generator").on('click','.select-meme')
			$(".meme-generator").on('click','.select-meme',function(){
				var imgSrc = $(this).find("img").attr("src");
				var id = $(this).data('id');
				$("#current-meme").attr("src",'/images/custom/loading.gif');

				$.ajax({
					type:'GET',
					url: '{{action('MemeTemplatesController@chooseTemplate')}}',
					data: { id : id },
					success: function(response){
					 	$("#current-meme").attr("src",'/memetemplates/'+response.fileName);
					 	$("#ex").html(response.ex);
					 	$("#tempTitle").html(response.title);
					},
				});
			});

		});
	</script>
@endsection