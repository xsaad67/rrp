@extends('layouts.app')

@section('css')

@endsection

@section('content')

<div class="container">
	<div class="row">
		<div class="col-lg-8">
			<div class="memes-card">

				@foreach($posts as $post)
					<div class="single-post">
						<div class="row shadow bg-white pt-5 pb-5 mr-2 br-bb">
							<div class="col-lg-8"><img src="{{$post->media}}" class="img-fluid"></div>
							<div class="col-lg-4">
								<a href="{{$post->link}}">
									<h2>{{$post->title}}</h2>
								</a>
								
								<span>By</span>
								<a href="{{$post->user->link}}">{{$post->user->name}}</a>

								<div class="row">
									<div class="col-lg-8">
										<div class="box">	
											<a href="javascript:void(0)" id="up-{{$post->id}}" class="upvote" data-id="{{$post->id}}">
												<i class="fa fa-arrow-up " aria-hidden="true"></i>
											</a>
										</div>
											<div class="box">
											<a href="javascript:void(0)" id="down-{{$post->id}}" class="downvote" data-id="{{$post->id}}">
												<i class="fa fa-arrow-down " aria-hidden="true"></i>
											</a>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				@endforeach
			</div>

			<div class="mt-5 d-flex justify-content-center">
				{{$posts->links()}}
			</div>

		</div>

		<div class="col-lg-4">
			@include('layouts.sidebar')
		</div>
	</div>
</div>
@endsection
