@extends('layouts.app')

@section('content')
	@if ($errors->any())
	    <div class="alert alert-danger">
	        <ul>
	            @foreach ($errors->all() as $error)
	                <li>{{ $error }}</li>
	            @endforeach
	        </ul>
	    </div>
	@endif
    <div id="page-creator">
    	{!! Form::open(array('url' => '#')) !!}    		
    		@if (isset($page))	
    			@if ($page->title != 'index')	
    				{!! Form::label('title', 'Title'); !!}		
		    		{!! Form::text('title', $page->title); !!} 
	    			{!! Form::select('category', $dropdownlist, $page->category_id, ['placeholder' => 'Category']); !!}
	    		@endif
		    	{!! Form::label('content', 'Content'); !!}   
		    	{!! Form::textarea('content', $page->content); !!}
		    	{!! Form::submit('Update Page'); !!}
		    @else
		    	{!! Form::label('title', 'Title'); !!}
		    	{!! Form::text('title'); !!} 
	    		{!! Form::select('category', $dropdownlist, null, ['placeholder' => 'Category']); !!}
		    	{!! Form::label('content', 'Content'); !!}   
		    	{!! Form::textarea('content'); !!}
		    	{!! Form::submit('Create Page'); !!}
		    @endif

		{!! Form::close() !!}
    </div>
     
@endsection

@section('complement')
    @parent

@endsection