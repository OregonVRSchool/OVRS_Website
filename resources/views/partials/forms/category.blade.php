@extends('layouts.app')

@section('content')
	@parent

    <div id="category-creator">
    	{!! Form::open(array('url' => '#')) !!}
    		
			{!! Form::label('name', 'Category Name'); !!}
			@if(isset($category))
	    		{!! Form::text('title', $category->title); !!} 
	    		{!! Form::submit('Update Category'); !!}
	    	@else
	    		{!! Form::text('title'); !!} 
	    		{!! Form::submit('Create Category'); !!}
	    	@endif

		{!! Form::close() !!}
    </div>
     
@endsection

@section('complement')
    @parent

@endsection