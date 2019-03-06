@extends('layouts.app')

@section('css')

<style>
.comment{
-webkit-box-shadow: -1px 2px 9px 0px rgba(0,0,0,0.75);
-moz-box-shadow: -1px 2px 9px 0px rgba(0,0,0,0.75);
box-shadow: -1px 2px 9px 0px rgba(0,0,0,0.75);
padding:25px;
margin-bottom:25px;
}

.replyForm{
	display:none;
}
</style>

@endsection

@section('content')
<div class="container">
	<div class="row">
		<div class="col-lg-8">
			<div class="memes-card">
				
					<div class="single-post">
						<div class="row">
							<div class="col-lg-8">
								<h1 class="text-center">{{$post->title}}</h1>
								<img src="{{$post->media}}" class="img-fluid">
							</div>
						</div>
					</div>
					<hr>
					 <h4>Comments</h4>
					<div id="display-comments">
                    	@include('partials._comment_replies', ['comments' => $post->comments, 'post_id' => $post->id])
                    </div>
                    <hr />

                    @auth
					<h4>Add comment</h4>
	                    <form method="post" action="{{ route('comment.add') }}">
	                        @csrf
	                        <div class="form-group">
	                            <textarea placeholder="Place Your Comment here" name="comment_body" id="comment_body" class="form-control"></textarea>
	                            <input type="hidden" name="post_id" id="post_id" value="{{ $post->id }}" />
	                        </div>
	                        <div class="form-group">
	                            <input type="submit" class="btn btn-warning" id="c-sub" value="Add Comment" />
	                        </div>
	                    </form>

	                @else
	                	<a href="/login">login to comment and reply</a>
                    @endauth
				
				
			</div>

		</div>

		<div class="col-lg-4">
			<div class="memes-card">

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

		$("#c-sub").click(function(e){
			e.preventDefault();
			var id = $("#post_id").val();
			var comment = $("#comment_body").val();
			

			$.ajax({
				type: "POST",
				url: "{{ route('comment.add') }}",
				data:{ post_id:id,comment_body:comment },
				dataType: "json",
				success: function(response){
					console.log(response.html);
				 	$("#display-comments").append(response.html);
				},
			});
		});

		$("#display-comments").on("click",".show-reply",function(e){
			e.preventDefault();
			$(this).parent().find(".replyForm").first().show();
			console.log($(this).parent().find(".replyForm").first().html());
			// $(this).remove();
		});

		$("#display-comments").on("click",".r-sub",function(e){
			e.preventDefault();

			
			var post_id = $("#post_id").val();
			var parent_id = $(this).parent().find(".comment_id").val();
			var comment_body = $(this).parent().parent().find(".comment_body").val();

			$.ajax({
				type: "POST",
				url: "{{ route('reply.add') }}",
				data:{ post_id:post_id,comment_body:comment_body,comment_id:parent_id },
				dataType: "json",
				
				success: function(response){
					$("#com-"+parent_id).append(response.html);
					$("#form-"+parent_id).hide();
				 	
				},
			});
		
		});

	});
</script>
@endsection