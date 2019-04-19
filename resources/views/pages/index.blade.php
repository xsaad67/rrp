@extends('layouts.app')

@section('content')
	<section class="slice bg-secondary">

		<div class="container">
	    	<div class="row">
	    		<div class="col-lg-8 ">
					@foreach($posts as $post)
		                <div class="card shadow-sm shadow--hover mb-2">
		                	<a class="postTitle p-3" href="{{$post->link}}">
		                		<h2 class="">{{$post->title}}</h2>
		                	</a>

		                	<span class="px-3 posted mb-1">Posted By <a href="#">{{$post->user->name}}</a> {{$post->created_at->diffForHumans()}}</span>

		                    <img alt="Image placeholder" src="{{$post->media}}" class="card-img-top">

		                    <div class="social-share share-post text-center" style="display:none;">
								<a href="http://www.facebook.com/sharer.php?s=100&amp;p[title]={{$post->title}}&amp;p[summary]={{$post->title}} {{$post->link}} via {{'@ '.env('APP_NAME')}}&amp;p[url]={{$post->link}}&amp;p[images[0]={{$post->media}}" onclick="window.open(this.href, 'facebookwindow','left=20,top=20,width=600,height=700,toolbar=0,resizable=1'); return false;">
									<i class="fab fa-facebook sc"></i>
								</a> 
	                        	<a href="http://twitter.com/intent/tweet?text={{$post->title}} {{$post->link}} via {{'@ '.env('APP_NAME')}}" onclick="window.open(this.href, 'twitterwindow','left=20,top=20,width=600,height=300,toolbar=0,resizable=1'); return false;">
	                        		<i class="fab fa-twitter sc"></i>
	                        	</a> 
	                        	<a href="http://pinterest.com/pin/create/bookmarklet/?media={{$post->media}}&url={{$post->title}}&is_video=false&description={{$post->title}} {{$post->link}} via {{'@ '.env('APP_NAME')}}" onclick="window.open(this.href, 'pinterestwindow','left=20,top=20,width=600,height=700,toolbar=0,resizable=1'); return false;">
	                        		<i class="fab fa-pinterest sc"></i>
	                        	</a> 
	                        	<a href="http://www.reddit.com/submit?url={{$post->link}}&title={{$post->title}}" onclick="window.open(this.href, 'redditwindow','left=20,top=20,width=600,height=700,toolbar=0,resizable=1'); return false;">
	                        		<i class="fab fa-reddit sc"></i>
	                        	</a>  
	                        	<a href="http://www.mix.com/submit?url={{$post->link}}&title={{$post->title}}" onclick="window.open(this.href, 'stumbleuponwindow','left=20,top=20,width=600,height=700,toolbar=0,resizable=1'); return false;">
	                        		<i class="fab fa-stumbleupon sc"></i>
	                        	</a> 
	                        	<a href="http://www.linkedin.com/shareArticle?url={{$post->link}}&title={{$post->title}}" onclick="window.open(this.href, 'linkedinwindow','left=20,top=20,width=600,height=700,toolbar=0,resizable=1'); return false;">
	                        		<i class="fab fa-linkedin sc"></i>
	                        	</a> 
	                    	</div>
		                    
		                    <div class="card-footer">

		                    	<div class="d-flex justify-content-between">
		                    		<div>
		                    			<a href="javascript:void(0);" class="text-muted shareIcon"><i class="far fa-comments mr-2 fa-2x text-muted"></i></a>
		                    			<a href="javascript:void(0);" class="text-muted shareIcon"><i class="far fa-heart mr-2 fa-2x text-muted"></i></a>
		                    		</div>

		                    		<div class="d-flex justify-content-between">
			                    		<a href="javascript:void(0);" class="text-muted shareIcon"><i class="far fa-thumbs-up mr-4 fa-2x text-muted"></i></a>

			                    		{{-- <p class="text-muted">45</p> --}}
			                    		<a href="javascript:void(0);" class="text-muted shareIcon"><i class="far fa-thumbs-down ml-4 fa-2x text-muted"></i></a>
		                    		</div>
		                    		<div>
		                    			<a href="javascript:void(0);" class="text-muted shareIcon"><i class="far fa-share-alt-square mr-1 fa-2x text-muted"></i></a>
		                    			<a href="javascript:void(0);" class="text-muted shareIcon"><i class="far fa-exclamation-triangle mr-1 fa-2x text-muted"></i></a>
		                    		</div>
		                    	</div>
		                    	                     
		                    </div>
		                     <div style="border-top: .0625rem solid rgba(0,0,0,.08);">
							

							<div class="d-flex bd-highlight mb-3">
							  	<div class="mr-auto p-2 bd-highlight ml-3">
							  		<i class="far fa-tags mt-3 mr-1 text-muted"></i>
									<a href="#" class="badge badge-md badge-pill badge-info">this is total shit slumdog</a>
									<a href="#" class="badge badge-md badge-pill badge-info">this is total shit slumdog</a>
									<a href="#" class="badge badge-md badge-pill badge-info">this is total shit slumdog</a>
								</div>
							</div>
		                       
		                        
		                       
		                    </div>
		                </div>
					@endforeach
				</div>

				<div class="col-lg-4">
					<div class="card">
	                    <div class="card-header py-3  text-center">
	                        <span class="h5">Popular Meme Templates</span>
	                    </div>
	                    <div class="card-body">

	                		@foreach($memeTemplates as $template)
		                        <div class="media align-items-center mb-2">
		                            <img class="avatar avatar-lg mr-4" src="{{$template->templateImage}}">
		                            <div class="media-body">
		                                <a href="{{$template->link}}" class="h5 mb-0">{{$template->title}}</a>
		                            </div>
		                        </div>
	                        @endforeach

	                        <div class="text-center mt-5">
	                        	<a class="btn btn-primary" href="#">All Meme Templates</a>
	                        </div>

	                    </div>
	                </div>

	                <div class="card">
	                </div>
				</div>
			</div>
		</div>

	</section>
@endsection

@section('js')
 
<script>
	$(function(){

		$(".shareIcon").click(function(){
			// alert($(this).closest(".card").html());
			$(this).closest(".card").find(".share-post").slideToggle();
		});

		$.ajaxSetup({
		  headers: {
		    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
		  }
		});

		$(".upvote, .upvoted").click(function(){
			var id = $(this).data("id");
			$(this).html('<img src="/images/custom/loading.gif" class="img-fluid">');
			

			$.ajax({
				type:"POST",
				url: "/upvote",
				data: {id:id},
				dataType: "json",
				context : this,
				success: function(response){
					$(this).html('<i class="fa fa-arrow-up " aria-hidden="true"></i>');
					$("#down-"+id).removeClass().addClass('downvote');
					$(this).removeClass().addClass(response.class);

				},
			 	error: function (xhr, ajaxOptions, thrownError) {
			        if(xhr.status === 401){
			        	$(location).attr('href', '/login');
			        }
		      	}
			});
		});


		$(".downvote, .downvoted").click(function(){
			var id = $(this).data("id");
			$(this).html('<img src="/images/custom/loading.gif" class="img-fluid">');
			

			$.ajax({
				type:"POST",
				url: "/downvote",
				data: {id:id},
				dataType: "json",
				context : this,
				success: function(response){
					$(this).html('<i class="fa fa-arrow-down " aria-hidden="true"></i>');
					$("#up-"+id).removeClass().addClass('upvote');
					$(this).removeClass().addClass(response.class);

				},
			 	error: function (xhr, ajaxOptions, thrownError) {
			        if(xhr.status === 401){
			        	$(location).attr('href', '/login');
			        }
		      	}
			});
		});



	});
</script>

@endsection