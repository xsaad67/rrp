@extends('layouts.app')

@section('content')
	<div class="container">

		<div class="row">
			<div class="col-lg-8">

				@if(session("success"))
					<div class="alert alert-inverse mt-2">{{ session("success") }}</div>
				@endif



				<div class="card shadow-sm shadow--hover mb-2">
					
		        	<a class="postTitle p-3" href="{{$post->link}}"><h2 class="">{{$post->title}}</h2></a>

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

		    </div>
		</div>
	</div>
@endsection


@section('js')

@endsection