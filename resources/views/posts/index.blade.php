@extends('layouts.app')

@section('css')

<style>
.box{
    display: inline-block;
    vertical-align: top;
    z-index: 1;
    border: 1px solid #ccc;
    background: #f2f2f2;
    position: relative;
    padding: 3px  3px 1px 3px;
    max-height:35px;
    max-width:35px;
}
.box > a{
	color:#aaa;
	font-size:20px;
}
.upvoted{
	color:#000 !important;
}
.downvoted{
	color:#000 !important;
}

.abc-card{
    padding: 15px;
    border: 2px solid #ccc;
    background:#fff;
}

.ab-bt{
	display: block;
    height: 30px;
    line-height: 30px;
    font-weight: bold;
    color: #222;
    text-indent: 10px;
    padding: 5px;
    margin: -5px;
    border-radius: 3px;

}
.ab-bt:hover{
	background: #e7e7e7;
    text-decoration: none;
}
.br-bb{
-webkit-border-top-left-radius: 25px;
-webkit-border-bottom-right-radius: 25px;
-moz-border-radius-topleft: 25px;
-moz-border-radius-bottomright: 25px;
border-top-left-radius: 25px;
border-bottom-right-radius: 25px;
border-bottom: 8px solid #cc30c7;

}

</style>

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
					<hr>
				@endforeach

				<div class="text-center">
					{{$posts->links()}}
				</div>
				
			</div>

		</div>

		<div class="col-lg-4">
			<div class="abc-card">
				<a href="/meme/create" class="ab-bt">Create Meme</a>
				<a href="/meme/upload" class="ab-bt">Upload Meme</a>
			</div>

			<div class="shadow p-3 mb-5 bg-white rounded mt-5">

				<h3 class="text-center mb-4">Popular Meme Templates</h3>

				{{-- @php dump($memeTemplates) @endphp --}}
			
				@foreach($memeTemplates as $template)

					<a class="row" href="{{$template->link}}" style="color:#000">
					<div class="media mb-4"><img class="img-fluid col-lg-5" src="{{url('/imagecache/large/'.$template->fileName) }}"  alt="Media">
			            <div class="media-body col-lg-7">
			                <h5 class="mt-0 mb-1">{{$template->title}}</h5> 
		            	</div>
		            </div>
					</a>
					
				@endforeach

				<div class="text-center">
					<a class=" btn btn-warning btn-lg">All templates</a>
				</div>
				
			</div>
		</div>
	</div>
</div>
@endsection

@section('js')

<script>
	$(function(){

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