$(function(){
	$.ajaxSetup({
	  headers: {
	    'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
	  }
	});

	$(".upvote, .upvoted").click(function(){
		var id = $(this).data("id");
		$(this).html('<div class="spinner-border text-success" role="status"><span class="sr-only">Loading...</span></div>');
		

		$.ajax({
			type:"POST",
			url: "/upvote",
			data: {id:id},
			dataType: "json",
			context : this,
			success: function(response){
				$(this).html('<i class="fa fa-thumbs-up" aria-hidden="true"></i>');
				 $("#down-"+id).removeClass("downvoted").addClass('downvote');
				$(this).removeClass(response.remove).addClass(response.class);
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
		$(this).html('<div class="spinner-border text-danger" role="status"><span class="sr-only">Loading...</span></div>');
		$.ajax({
			type:"POST",
			url: "/downvote",
			data: {id:id},
			dataType: "json",
			context : this,
			success: function(response){
				$(this).html('<i class="fa fa-thumbs-down" aria-hidden="true"></i>');
				$("#up-"+id).removeClass("upvoted").addClass('upvote');
				$(this).removeClass(response.remove).addClass(response.class);

			},
		 	error: function (xhr, ajaxOptions, thrownError) {
		        if(xhr.status === 401){
		        	$(location).attr('href', '/login');
		        }
	      	}
		});
	});
});