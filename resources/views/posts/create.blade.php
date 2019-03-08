@extends('layouts.app')

@section('css')

@endsection

@section('content')

<div class="row">
	<div class="col-lg-4">
		
	{!! '<img src="'.asset(' asset("images/my2.png")').'">' !!}

	</div>
</div>


@endsection

@section('js')

<script src="{{ asset('js/preview.min.js') }}"></script>
<script>
	
	$(function(){
		
		
	})
</script>

@endsection
