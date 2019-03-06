	@foreach($templates as $template)
		<a href="javascript:void(0)" data-id="{{encrypt($template->id)}}" class="select-meme">
			<img src="/imagecache/small/{{$template->fileName}}" class="template-img">
		</a>
	@endforeach