@extends('layouts.app')

@section('content')
	@parent
	<div class="container" id="student-application">
    	<div class="row justify-content-center">
        	<div class="col-md-10">
				<div class="card">
					@if ($errors->any())
					    <div class="alert alert-danger">
					        <ul>
					            @foreach ($errors->all() as $error)
					                <li>{{ $error }}</li>
					            @endforeach
					        </ul>
					    </div>
					@endif
				    <div @yield('page-id')>
				    	{!! Form::open(array('url' => '#')) !!}
				    		<div class="card-header">
				    			@section('page-title')
				    			@show
				    		</div>
				    		<div class="card-body">
				    			@section('form-content')
				    			@show
				    			@section('buttonRow')
				    				@include('partials.forms.applications.parts.submitButtonRow')
				    			@show	
				    		</div>
				    		
						{!! Form::close() !!}
				    </div>
			    </div>
			</div>
		</div>
	</div>
     
@endsection

@section('quicknav')
	@parent
	@section('quicknav-extension')
		@include('partials.forms.applications.parts.studentQuicknav')
	@show
@endsection

@section('complement')
    @parent

@endsection