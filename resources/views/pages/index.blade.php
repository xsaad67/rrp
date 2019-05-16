@extends('layouts.main')

@section('css')

<style>
	.upvoted,.downvoted > i{
		color: rebeccapurple;
	}
</style>
@endsection
@section('content')

	<section class="py-lg-5">

	    <div class="container">
	        <div class="row">
	            {{-- <div class="col-lg-3 order-2 order-lg-1">
	                <div class="widget mt-4">
	                    <div class="widget-header">About me</div>
	                    <div class="widget-body">
	                        <p>I am a frontend developer &amp; web designer. I love to work on creative and standalone projects like gameforest.</p>
	                        <p class="font-size-sm font-weight-semibold mb-1"><i class="ya ya-pin mr-1"></i> Budapest</p>
	                        <p class="font-size-sm font-weight-semibold mb-1"><i class="ya ya-twitter mr-1"></i> <a href="https://twitter.com/yakuthemes" target="_blank">yakuthemes</a></p>
	                        <p class="font-size-sm font-weight-semibold mb-1"><i class="ya ya-calendar mr-1"></i> Joined December 2009</p><a class="btn btn-outline btn-sm btn-block mt-3" href="#" role="button">Send message</a></div>
	                </div>
	                <!-- end .widget -->
	                <div class="widget widget-secondary">
	                    <div class="widget-header border-0">Navigation</div>
	                    <div class="list-group list-group-flush"><a class="list-group-item" href="#"><i class="ya ya-content"></i> Timeline </a><a class="list-group-item" href="#"><i class="ya ya-users"></i> Friends <span class="badge badge-secondary badge-pill">14</span> </a><a class="list-group-item" href="#"><i class="ya ya-image"></i> Images <span class="badge badge-secondary badge-pill">42</span> </a><a class="list-group-item" href="#"><i class="ya ya-player"></i> Videos </a><a class="list-group-item" href="#"><i class="ya ya-camera"></i> Streams <span class="badge badge-secondary badge-pill">23</span> </a><a class="list-group-item" href="#"><i class="ya ya-comments"></i> Forums </a><a class="list-group-item" href="#"><i class="ya ya-shopping-cart"></i> Shop </a></div>
	                </div>
	                <!-- end .widget -->
	                <div class="widget widget-users">
	                    <div class="widget-header">Friends (679)</div>
	                    <div class="widget-body">
	                        <a href="#" data-toggle="tooltip" title="Venom"><img src="img/user-2.jpg" alt="Venom"></a>
	                        <a href="#" data-toggle="tooltip" title="Elizabeth"><img src="img/user-3.jpg" alt="Elizabeth"><span class="badge badge-warning"></span> </a>
	                        <a href="#" data-toggle="tooltip" title="Trevor"><img src="img/user-4.jpg" alt="Trevor"></a>
	                        <a href="#" data-toggle="tooltip" title="Clark Kent"><img src="img/user-5.jpg" alt="Clark Kent"><span class="badge badge-success"></span> </a>
	                        <a href="#" data-toggle="tooltip" title="Aragorn"><img src="img/user-default.jpg" alt="Aragorn"></a>
	                        <a href="#" data-toggle="tooltip" title="Michael"><img src="img/user-6.jpg" alt="Michael"><span class="badge badge-warning"></span> </a>
	                        <a href="#" data-toggle="tooltip" title="Max Payne"><img src="img/user-7.jpg" alt="Max Payne"><span class="badge badge-danger"></span> </a>
	                        <a href="#" data-toggle="tooltip" title="Shroud"><img src="img/user-default.jpg" alt="Shroud"></a>
	                        <a href="#" data-toggle="tooltip" title="Lara Croft"><img src="img/user-8.jpg" alt="Lara Croft"></a>
	                        <a href="#" data-toggle="tooltip" title="punisher"><img src="img/user-9.jpg" alt="punisher"></a>
	                        <a href="#" data-toggle="tooltip" title="celebro"><img src="img/user-10.jpg" alt="celebro"></a>
	                        <a href="#" data-toggle="tooltip" title="Hitman"><img src="img/user-11.jpg" alt="Hitman"></a>
	                        <a href="#" data-toggle="tooltip" title="Enigma"><img src="img/user-default.jpg" alt="Enigma"></a>
	                        <a class="widget-user widget-user-count" href="#"><img src="img/user-default.jpg" alt=""><span>+48</span></a>
	                        <div><a class="btn btn-outline btn-block btn-sm mt-3" href="#">View all</a></div>
	                    </div>
	                </div>
	                <!-- end .widget -->
	            </div> --}}
	            

	            <div class="col-lg-7 order-1 order-lg-2">
	                
					@foreach($posts as $post)
		            	<div class="card">
						    <div class="card-header d-flex align-items-center bg-lighten">
						        <a href="{{$post->link}}"><p class="h2">{{$post->title}}</p></a>
						    </div>

						    <div class="card-body px-0 py-0">
						        <a href="{{$post->link}}"><img class="img-fluid lazyload " src="{{$post->media}}" style="width:100%;"></a>
						    </div>

						    <div class="text-center my-2">
						        <a href="#" class="badge badge-facebook"><i class="fab fa-facebook-f"></i></a>
						        <a href="#" class="badge badge-twitter"><i class="fab fa-twitter"></i></a>
						        <a href="#" class="badge badge-pinterest"><i class="fab fa-pinterest-p"></i></a>
						        <a href="#" class="badge badge-reddit"><i class="fab fa-reddit-alien"></i></a>
						        <a href="#" class="badge badge-github"><i class="fas fa-envelope"></i></a>						       
						    </div>

						    <div class="card-footer d-flex">
						        <a class="avatar-badge avatar-xs mr-3" href="{{$post->user->link}}">
						        	<img src="{{$post->user->dp}}" alt="{{$post->user->name}}">
						        </a>

						        <div>
						        	<p class="card-title mb-0"><a href="{{$post->user->link}}">{{$post->user->name}}</a></p>
						        	<span class="text-muted font-size-sm">{{$post->user->created_at->diffForHumans()}}</span>
						        </div>

						        <div class="btn-group mx-auto pl-lg-5 pl-2">
						           	<a class="btn btn-default btn-icon {{ $post->upvoters->contains('id',auth()->id()) ? 'upvoted' : 'upvote'}}" id="up-{{$post->id}}" href="javascript:void(0);" data-id="{{$post->id}}"><i class="fas fa-thumbs-up"></i></a>
						           	<a class="btn btn-default btn-icon {{ $post->downvoters->contains('id',auth()->id()) ? 'downvoted' : 'downvote'}}" id="down-{{$post->id}}" href="javascript:void(0);" data-id="{{$post->id}}"><i class="fas fa-thumbs-down"></i></a>
					           	</div>

						        <div class="ml-auto mt-2">
						            <button class="btn btn-default btn-icon btn-xs"><i class="far fa-heart"></i> (25)</button>
						            <button class="btn btn-default btn-icon btn-xs"><i class="ya ya-flag"></i></button>
						        </div>
						    </div>

	    					<div class="px-2 py-2"><a href="#" class="badge badge-dark mr-2">Dark</a></div>
						</div>
					@endforeach
	                <a class="btn btn-outline btn-block btn-sm" href="#" role="button">Load More</a>

	            </div>
	            
	            <div class="col-lg-3 order-3">
	                <div class="widget widget-secondary widget-recommends mt-4 mt-lg-0">
	                    <div class="widget-header">Recommends</div>
	                    <div class="widget-body pb-0">
	                       
	                    </div>
	                </div>
	                <!-- end .widget -->
	            </div>
	        </div>
	    </div>

	</section>

@endsection

