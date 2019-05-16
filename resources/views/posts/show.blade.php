@extends('layouts.main')

@section('content')
	<div class="container my-3">

		<div class="row">
			<div class="col-lg-8">

				@if(session("success"))
					<div class="alert alert-inverse mt-2">{{ session("success") }}</div>
				@endif

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


				<div id="comments" class="comments mt-3 mt-lg-0">
				    <div class="d-flex align-items-center mb-3">
				        <h5 class="mb-0"><i class="ya ya-comment mr-1"></i> 5 Comments</h5>
				        <div class="dropdown ml-auto">
				            <button class="btn btn-light dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Sort by date</button>
				            <div class="dropdown-menu dropdown-menu-right" x-placement="bottom-end" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(131px, 38px, 0px);"><a class="dropdown-item active" href="#">Latest</a><a class="dropdown-item" href="#">Oldest</a><a class="dropdown-item" href="#">Best</a><a class="dropdown-item" href="#">Random</a></div>
				        </div>
				    </div>
				    
					<div class="alert alert-primary">Please login to submit a comment under this post!</div>
    
				    <div class="media">
				        <div class="avatar"><img src="img/user-1.jpg" alt="Nathan Drake"></div>
				        <div class="media-body">
				            <div class="d-flex">
				                <div class="d-flex"><a class="h6" href="profile.html">Nathan Drake</a>
				                    <div class="media-meta">8 hours ago</div>
				                </div>
				                <div class="media-tools"><a class="btn btn-link btn-icon btn-xs" href="#" data-toggle="tooltip" title="" data-original-title="hide"><i class="ya ya-hide"></i></a><a class="btn btn-link btn-icon btn-xs" href="#" data-toggle="tooltip" title="" data-original-title="report"><i class="ya ya-flag"></i></a></div>
				            </div>
				            <p>Repulsive questions contented him few extensive supported. Of remarkably thoroughly he appearance in. Supposing tolerably applauded or of be. Suffering unfeeling so objection agreeable allowance me of. Ask within entire season sex common far who family.</p>
				            <div class="d-flex align-items-center">
				                <button class="btn btn-default btn-xs mr-2">Reply</button>
				                <button class="btn btn-default btn-xs"><i class="ya ya-like ml-0"></i> (27)</button>
				            </div>
				            <div class="media">
				                <div class="avatar"><img src="img/user-4.jpg" alt="Trevor"></div>
				                <div class="media-body">
				                    <div class="d-flex">
				                        <div class="d-flex"><a class="h6" href="profile.html">Trevor</a>
				                            <div class="media-meta">12 hours ago</div>
				                        </div>
				                        <div class="media-tools"><a class="btn btn-link btn-icon btn-xs" href="#" data-toggle="tooltip" title="" data-original-title="hide"><i class="ya ya-hide"></i></a><a class="btn btn-link btn-icon btn-xs" href="#" data-toggle="tooltip" title="" data-original-title="report"><i class="ya ya-flag"></i></a></div>
				                    </div>
				                    <p>Delightful remarkably mr on announcing themselves entreaties favourable. About to in so terms voice at. Equal an would is found seems of. The particular friendship one sufficient terminated frequently themselves.</p>
				                    <div class="d-flex align-items-center">
				                        <button class="btn btn-default btn-xs mr-2">Reply</button>
				                        <button class="btn btn-default btn-xs"><i class="ya ya-like ml-0"></i> (72)</button>
				                    </div>
				                </div>
				            </div>
				            <div class="media">
				                <div class="avatar"><img src="img/user-5.jpg" alt="Clark Kent"></div>
				                <div class="media-body">
				                    <div class="d-flex">
				                        <div class="d-flex"><a class="h6" href="profile.html">Clark Kent</a>
				                            <div class="media-meta">13 hours ago</div>
				                        </div>
				                        <div class="media-tools"><a class="btn btn-link btn-icon btn-xs" href="#" data-toggle="tooltip" title="" data-original-title="hide"><i class="ya ya-hide"></i></a><a class="btn btn-link btn-icon btn-xs" href="#" data-toggle="tooltip" title="" data-original-title="report"><i class="ya ya-flag"></i></a></div>
				                    </div>
				                    <p>To sorry world an at do spoil along. Incommode he depending do frankness remainder to. Edward day almost active him friend thirty piqued.</p>
				                    <div class="d-flex align-items-center">
				                        <button class="btn btn-default btn-xs mr-2">Reply</button>
				                        <button class="btn btn-default btn-xs"><i class="ya ya-like ml-0"></i> (29)</button>
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


@section('js')
	<script type="text/javascript" src="{{ asset('js/admin-ajax.js') }}"></script>
@endsection