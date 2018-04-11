@extends('layouts.category')

@section('content')

    <div id="page-creator">
    	{!! Form::open(array('url' => '#')) !!}
    		
			{!! Form::label('title', 'Title'); !!}
	    	{!! Form::text('title'); !!} 
    		{!! Form::select('category', ['L' => 'Large', 'S' => 'Small'], null, ['placeholder' => 'Category']); !!}
	    	{!! Form::label('content', 'Content'); !!}   
	    	{!! Form::textarea('content'); !!}
	    	{!! Form::submit('Create Page'); !!}

		{!! Form::close() !!}
    </div>
     
@endsection
