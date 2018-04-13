@extends('layouts.app')

@section('content')

    <div id="page-creator">
    	{!! Form::open(array('url' => '#')) !!}
    		
			{!! Form::label('title', 'Title'); !!}
	    	{!! Form::text('title'); !!} 
    		{!! Form::select('category', $dropdownlist, null, ['placeholder' => 'Category']); !!}
	    	{!! Form::label('content', 'Content'); !!}   
	    	{!! Form::textarea('content'); !!}
	    	{!! Form::submit('Create Page'); !!}

		{!! Form::close() !!}
    </div>
     
@endsection

@section('complement')
    @parent

@endsection