@extends('layouts.app')

@section('content')

    <div id="category-creator">
    	{!! Form::open(array('url' => '#')) !!}
    		
			{!! Form::label('name', 'Category Name'); !!}
	    	{!! Form::text('name'); !!} 
	    	{!! Form::submit('Create Category'); !!}

		{!! Form::close() !!}
    </div>
     
@endsection

@section('complement')
    @parent

@endsection