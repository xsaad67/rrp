@extends('layouts.main')

@section('content')

	<section class="py-lg-5">

	    <div class="container">
	        <div class="row">
	            <div class="col-lg-3 order-2 order-lg-1">
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
	            </div>
	            

	            <div class="col-lg-7 order-1 order-lg-2">
	                
					@foreach($posts as $post)
		            	
		            	<div class="card">
						    <div class="card-header d-flex align-items-center bg-lighten">

						        <a href="#">
						        	<p class="h2">{{$post->title}}</p>
						        </a>
						        <div class="dropdown ml-auto">
						            <button class="btn btn-link btn-block btn-icon" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="ya ya-menu"></i></button>
						            <div class="dropdown-menu dropdown-menu-right" x-placement="bottom-end" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(40px, 38px, 0px);"><a class="dropdown-item" href="#">Edit</a><a class="dropdown-item" href="#">Delete</a><a class="dropdown-item" href="#">Hide from timeline</a>
						                <div class="dropdown-divider"></div><a class="dropdown-item" href="#">Mark as featured</a></div>
						        </div>
						    </div>
						    <div class="card-body px-0 py-0">
						       
						        	<img class="img-fluid" src="{{$post->media}}" alt="">
						        
						    </div>
						    <div class="text-center">
						        <button type="button" class="btn btn-primary btn-icon"><i class="ya ya-facebook"></i></button><a type="button" class="badge badge-twitter"><i class="ya ya-comments"></i></a>
						        <button type="button" class="btn btn-success btn-icon"><i class="ya ya-check-circle"></i></button>
						        <button type="button" class="btn btn-danger btn-icon"><i class="ya ya-bell"></i></button>
						        <button type="button" class="btn btn-warning btn-icon"><i class="ya ya-email"></i></button>
						        <button type="button" class="btn btn-info btn-icon"><i class="ya ya-gear"></i></button>
						        <button type="button" class="btn btn-dark btn-icon"><i class="ya ya-like"></i></button>
						        <button type="button" class="btn btn-default btn-icon"><i class="ya ya-comment"></i></button>
						        <button type="button" class="btn btn-link btn-icon"><i class="ya ya-attachment"></i></button>
						    </div>

						    <div class="card-footer d-flex">

						        <div class="avatar-badge avatar-xs mr-3"><img src="img/user-3.jpg" alt=""><span class="badge badge-warning"></span> </div>
						        <div><p class="card-title" style=" margin-bottom: 0px;"><a href="#">Elizabeth</a></p><span class="text-muted font-size-sm">8 hours ago</span></div>

						        <div class="ml-auto mt-2">
						            <button class="btn btn-default btn-icon btn-xs mr-1"><i class="ya ya-like"></i> 19</button>
						            <button class="btn btn-default btn-icon btn-xs"><i class="ya ya-comment"></i> comments (72)</button>
						        </div>
						    </div>

	    					<div class="px-2 py-2"><a href="#" class="badge badge-dark mr-2">Dark</a></div>
						</div>

					@endforeach
	                <a class="btn btn-outline btn-block btn-sm" href="#" role="button">Load More</a>

	            </div>
	            
	            <div class="col-lg-2 order-3">
	                <div class="widget widget-secondary widget-recommends mt-4 mt-lg-0">
	                    <div class="widget-header">Recommends</div>
	                    <div class="widget-body pb-0">
	                        <div class="widget-user d-flex align-items-start"><img src="img/user-2.jpg" alt="Venom">
	                            <div><a class="font-size-md font-weight-semibold" href="#">Venom</a><a class="btn btn-outline btn-icon-left btn-xs text-center mt-lg-2 ml-auto ml-lg-0" href="#"><i class="ya ya-user-add d-md-inline d-lg-none d-xl-inline"></i> Add</a></div>
	                        </div>
	                        <div class="widget-user d-flex align-items-start"><img src="img/user-3.jpg" alt="Elizabeth">
	                            <div><a class="font-size-md font-weight-semibold" href="#">Elizabeth</a><a class="btn btn-outline btn-icon-left btn-xs text-center mt-lg-2 ml-auto ml-lg-0" href="#"><i class="ya ya-user-add d-md-inline d-lg-none d-xl-inline"></i> Add</a></div>
	                        </div>
	                        <div class="widget-user d-flex align-items-start"><img src="img/user-4.jpg" alt="Trevor">
	                            <div><a class="font-size-md font-weight-semibold" href="#">Trevor</a><a class="btn btn-outline btn-icon-left btn-xs text-center mt-lg-2 ml-auto ml-lg-0" href="#"><i class="ya ya-user-add d-md-inline d-lg-none d-xl-inline"></i> Add</a></div>
	                        </div>
	                        <div class="widget-user d-flex align-items-start"><img src="img/user-5.jpg" alt="Clark Kent">
	                            <div><a class="font-size-md font-weight-semibold" href="#">Clark Kent</a><a class="btn btn-outline btn-icon-left btn-xs text-center mt-lg-2 ml-auto ml-lg-0" href="#"><i class="ya ya-user-add d-md-inline d-lg-none d-xl-inline"></i> Add</a></div>
	                        </div>
	                        <div class="widget-user d-flex align-items-start"><img src="img/user-default.jpg" alt="Aragorn">
	                            <div><a class="font-size-md font-weight-semibold" href="#">Aragorn</a><a class="btn btn-outline btn-icon-left btn-xs text-center mt-lg-2 ml-auto ml-lg-0" href="#"><i class="ya ya-user-add d-md-inline d-lg-none d-xl-inline"></i> Add</a></div>
	                        </div>
	                    </div>
	                </div>
	                <!-- end .widget -->
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