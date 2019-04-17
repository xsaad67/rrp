@extends('layouts.app')

@section('css')

<style>
.sticky-offset {
    top: 80px;
}

.sc {
  padding: 10px;
  font-size: 24px;
  text-align: center;
  text-decoration: none;
  color: white;
}

.sc:hover {
    opacity: 0.7;
}

.fa-facebook {
  background: #3B5998;
}

.fa-twitter {
  background: #55ACEE;
}

.fa-google {
  background: #dd4b39;
}

.fa-linkedin {
  background: #007bb5;
}

.fa-youtube {
  background: #bb0000;
  color: white;
}

.fa-instagram {
  background: #125688;
}

.fa-pinterest {
  background: #cb2027;
  color: white;
}

.fa-snapchat-ghost {
  background: #fffc00;
  color: white;
  text-shadow: -1px 0 black, 0 1px black, 1px 0 black, 0 -1px black;
}

.fa-skype {
  background: #00aff0;
  color: white;
}

.fa-android {
  background: #a4c639;
  color: white;
}

.fa-dribbble {
  background: #ea4c89;
  color: white;
}

.fa-vimeo {
  background: #45bbff;
  color: white;
}

.fa-tumblr {
  background: #2c4762;
  color: white;
}

.fa-vine {
  background: #00b489;
  color: white;
}

.fa-foursquare {
  background: #45bbff;
  color: white;
}

.fa-stumbleupon {
  background: #eb4924;
  color: white;
}

.fa-flickr {
  background: #f40083;
  color: white;
}

.fa-yahoo {
  background: #430297;
  color: white;
}

.fa-soundcloud {
  background: #ff5500;
  color: white;
}

.fa-reddit {
  background: #ff5700;
  color: white;
}

.fa-rss {
  background: #ff6600;
  color: white;
}
.share-post{
    position: absolute;
    width: 100%;
    bottom: 11.4em;
    padding: 13px;
    background-color: rgba(0, 0, 0, 0.5);
}
</style>

@endsection

@section('content')

	
<section class="slice slice-lg bg-secondary">
	<div class="container">
    	<div class="row row-grid">
    		<div class="col-lg-8 ">
				@foreach($posts as $post)
	                <div class="card shadow-sm shadow--hover mb-2">
	                    <img alt="Image placeholder" src="{{$post->media}}" class="card-img-top">
	                    <div class="social-share share-post text-center" style="display:none;">
							<a href="#"><i class="fab fa-facebook sc"></i></a> 
                        	<a href="#"><i class="fab fa-twitter sc"></i></a> 
                        	<a href="#"><i class="fab fa-google sc"></i></a> 
                        	<a href="#"><i class="fab fa-pinterest sc"></i></a> 
                    	</div>
	                    
	                    <div class="card-footer">
	                    	
	                    	
	                    	<div class="d-flex">
		                        <div class="p-2 mr-auto media align-items-center">
	                                <span class="avatar avatar-md bg-primary rounded-circle mr-1">{{ getInitials($post->user->name) }}</span>
	                                <div class="media-body"><a href="#" class="h5 mb-0">{{ $post->user->name }}</a>
	                                </div>
	                            </div>	

	                            <div class="p-2">
	                            	<ul class="list-inline">
                                            <li class="list-inline-item pr-4">
                                               <a href="javascript:void(0);" class="text-muted shareIcon"><i class="far fa-share-alt-square mr-1 fa-2x text-muted"></i></a>
                                            </li>
                                            <li class="list-inline-item pr-4">
                                               <a href="javascript:void(0);" class="text-muted shareIcon"><i class="far fa-share-alt-square mr-1 fa-2x text-muted"></i></a>
                                            </li>
                                            
                                            
                                        </ul>
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