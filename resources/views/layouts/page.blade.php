@extends('layouts.app')

@section('content')
	<div id="page"> 
		@if ($page->title === "index")
		    <div id="{!! $page->category->title !!}">
		    	<h1 class="title">
		    		{!! $page->category->title !!}
		    	
		@else
			<div id="{!! $page->title !!}">
		    	<h1 class="title">
		    		{!! $page->title !!}
		@endif
		
				</h1>
				<div class="content">
		    		{!! $page->content !!}
		    	</div>
		    </div>
	</div>
     
@endsection
