@extends('layouts.app')

@section('content')

    <div id="test">
    	{!! Form::open(array('url' => '#')) !!}
		    <?php
		    	echo Form::text('title', 'Title');
		    	echo Form::textarea('content');
		    	echo Form::submit('Click Me!');
		    ?>
		{!! Form::close() !!}
    </div>
     
@endsection

@section('complement')
    @parent

@endsection