@extends('layouts.category')

@section('content')
	@if ($title === "index")
	    <div id="{!! $category_title !!}">
	    	<div class="title">
	    		{!! $category_title !!}
	    	
	@else
		<div id="{!! $title !!}">
	    	<div class="title">
	    		{!! $title !!}
	@endif
	
			</div>
			<div class="content">
	    		{!! $content !!}
	    	</div>
	    </div>
     
@endsection
