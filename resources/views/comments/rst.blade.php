@extends('layouts.main')


@section('css')

<link rel="stylesheet" type="text/css" href="https://unpkg.com/file-upload-with-preview@4.0.2/dist/file-upload-with-preview.min.css">
<link rel="stylesheet" type="text/css" href="//ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/themes/smoothness/jquery-ui.css">

<style>
	@import"responsive.min.css";[draggable]{-moz-user-select:none;-khtml-user-select:none;-webkit-user-select:none;user-select:none;-khtml-user-drag:element;-webkit-user-drag:element}.uploadArea{border:dashed #676465;text-align:center;line-height:30px;font-size:18px;margin-bottom:20px!important;cursor:pointer;max-width:130px}.uploadArea.selected{border:dashed #FA623F!important;}.uploadArea .new{padding-top:15px!important}.uploadArea input[type='file']{height:30px;color:transparent}.uploadArea i{font-size:25px;padding-top:15px}.image-preview img{padding-top:0px!important;width:130px;height:85px}.image-preview .remove{text-align:right;color:white;position:absolute;width:100%;padding-right:7px;background-color:#373435;opacity:.4;height:25px}.image-preview .remove i{font-size:22px;padding:0;margin:0;opacity:1!important}.item-box,.box-drag{float:left;display:block}.no-margin{margin:0px!important}.no-padding{padding:0px!important}
</style>


@endsection

@section('content')


<div class="my-5">
	
	<form method="POST" action="{{action('CrawlController@storeRst')}}" enctype="multipart/form-data" id="none"> 

		@csrf
	
		<div class="custom-file-container" data-upload-id="myUniqueUploadId">
		  <label>Upload File <a href="javascript:void(0)" class="custom-file-container__image-clear" title="Clear Image">&times;</a></label>
		  <label class="custom-file-container__custom-file">
		        <input type="file" class="custom-file-container__custom-file__custom-file-input" accept="*" name="file[]" multiple aria-label="Choose File">
		        <input type="hidden" name="MAX_FILE_SIZE" value="10485760" />
		        <input type="hidden" name="hello" value="" id="h"/>
		        <span class="custom-file-container__custom-file__custom-file-control"></span>
		    </label>
		  <div class="custom-file-container__image-preview" id="sortable-container"></div>
		</div>

		<button type="submit" class="btn btn-submit">Submit</button>
	</form>


</div>


@endsection


@section('js')

<script src="https://rawgit.com/HBROficial/uploadHBR/master/dist/js/uploadHBR.min.js"></script>

<script type="text/javascript">
	
	var upload = new FileUploadWithPreview('myUniqueUploadId')

	$("#sortable-container").sortable({
	  update: function(event, ui) {
	    // Get the new token order
	    let newTokenOrder = $(this).sortable('toArray', {attribute: 'data-upload-token'})
	    
	    // Init new array that we'll file with the correct order
	    let sortedCachedFileArray = []
	    
	    // Loop through the newTokenOrder array and add each email in place as found
	    for (let x = 0; x < newTokenOrder.length; x++) {
	      let foundIndex = upload.cachedFileArray.map(image => image.token).indexOf(newTokenOrder[x])
	      sortedCachedFileArray.push(upload.cachedFileArray[foundIndex])
	    }
	    
	    // Replace the cachedFileArray with your new sortedCachedFileArray
	    upload.replaceFiles(sortedCachedFileArray)
	  }
	});

	// Check the current status of the `cachedFileArray`
	$('#check-cachedFileArray').on('click', function() {
	  console.log(upload.cachedFileArray)
	});

	$("#none").submit(function(e){
		$("#h").val(upload.cachedFileArray);
		// e.preventDefault();
	});

</script>

@endsection