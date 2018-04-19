@extends('layouts.category')

@section('content')
	@if ($page->title === "index")
	    <div id="{!! $page->category->title !!}">
	    	<div class="title">
	    		{!! $page->category->title !!}
	    	
	@else
		<div id="{!! $page->title !!}">
	    	<div class="title">
	    		{!! $page->title !!}
	@endif
	
			</div>
			<div class="content">
	    		{!! $page->content !!}
	    	</div>
	    </div>
     
@endsection
