@extends('layouts.app')

@section('content')
    <div id="page-creator">
    	{!! Form::open(array('url' => '#')) !!}
    		{!! Form::label('title', 'Title'); !!}
    		@if (isset($page))				
		    	{!! Form::text('title', $page->title); !!} 
	    		{!! Form::select('category', $dropdownlist, $page->category_id, ['placeholder' => 'Category']); !!}
		    	{!! Form::label('content', 'Content'); !!}   
		    	{!! Form::textarea('content', $page->content); !!}
		    	{!! Form::submit('Update Page'); !!}
		    @else
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