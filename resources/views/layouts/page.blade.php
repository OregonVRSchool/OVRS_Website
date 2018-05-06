@extends('layouts.app')

@section('content')
	<div id="page"> 
		<div id="{{ $category->title }}">
			<h1 class="title">{{ $category->title }}</h1>
					    	
			<div id="{!! $page->title !!}">
		    	<h3 class="title">
		    		{!! $page->title !!}			
				</h3>
				<p class="content">
		    		{!! $page->content !!}
		    	</p>
		    </div>
			
		</div>
	</div>
     
@endsection
