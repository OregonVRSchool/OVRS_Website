@extends('layouts.category')

@section('content')

    <div id="{!! $title !!}">
    	<div class="title">
    		{!! $title !!}
    	</div>
    	<div class="content">
    		{!! $content !!}
    	</div>
    </div>
     
@endsection
