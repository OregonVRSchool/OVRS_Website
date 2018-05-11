@extends('layouts.app')

@section('content')
	@parent
	<div class="container">
    	<div class="row justify-content-center">
        	<div class="col-md-8">
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
				    <div id="category-creator">
				    	{!! Form::open(array('url' => '#')) !!}
				    		<div class="card-header">
				    			Applicant Information
				    		</div>
				    		<div class="card-body">
				    			
				    		</div>
						{!! Form::close() !!}
				    </div>
			    </div>
			</div>
		</div>
	</div>
     
@endsection

@section('complement')
    @parent

@endsection