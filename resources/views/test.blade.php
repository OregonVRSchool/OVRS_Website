@extends('layouts.app')

@section('content')

    <div id="page-creator">
    	{!! Form::open(array('url' => '#')) !!}
    		
			{!! Form::label('email', 'E-Mail Address'); !!}
	    	{!! Form::text('title', 'Title'); !!}    
	    	{!! Form::textarea('content'); !!}
	    	{!! Form::submit('Click Me!'); !!}

		{!! Form::close() !!}
    </div>
     
@endsection

@section('complement')
    @parent

@endsection