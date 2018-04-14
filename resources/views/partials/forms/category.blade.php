@extends('layouts.app')

@section('content')
	@parent

    <div id="category-creator">
    	{!! Form::open(array('url' => '#')) !!}
    		
			{!! Form::label('name', 'Category Name'); !!}
	    	{!! Form::text('title'); !!} 
	    	{!! Form::submit('Create Category'); !!}

		{!! Form::close() !!}
    </div>
     
@endsection

@section('complement')
    @parent

@endsection