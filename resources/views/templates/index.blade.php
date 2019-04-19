@extends('layouts.app')

@section('css')

<style>
	.meme-holder{
		width:100%;
		padding:25px;
	}
	.holder-title{
		height:50px;
		color:#000;
	}
	ul.pagination{
		justify-content: center;
	}
	.meme-holder .card{
		margin-bottom:25px;
	}

</style>

	

@endsection

@section('content')

<div class="container">
	<div class="meme-holder">
		<h1 class="text-center mb-5">All Memes Template</h1>
		<div class="text-center mb-5">

			<form method="GET" action="{{action('MemeTemplatesController@index')}}">
				<div class="row">
					<div class="col-lg-8 offset-1">
						<input type="text" class="form-control" name="q" value="{{$searchQuery}}">
					</div>

					<button type="submit" class="btn btn-primary  col-lg-2">Search</button>
				
				</div>
			</form>
		</div>
		<div class="row">


			@forelse($templates as $template)
				

				<div class="col-lg-4">

					<div class="card" style="width: 18rem;">
					  <img class="card-img-top img-fluid lazy" data-src="{{url("/imagecache/medium/".$template->fileName)}}" alt="{{$template->title}}">
					  <div class="card-body">
					    <h5 class="card-title text-center">{{$template->title}}</h5>
					    <div class="text-center">
					    	<a href="{{$template->createLink}}" class="btn btn-primary">Create Meme</a>
						</div>
					  </div>
					</div>
				</div>

			@empty


			<div class="alert alert-danger" style="width:100%;">
				<p class="text-center mt-2"><strong >Barm!</strong> Sorry no template found for your requested query</p>
			</div>

			@endforelse
		</div>
			{{$templates->links()}}
	</div>
</div>

@endsection


@section('js')

<script type="text/javascript" src="/js/lazy-load.min.js"></script>

<script>
	$(function(){
		
		$(".lazy").Lazy({
		    effect: 'show',
		});
	});
</script>

@endsection