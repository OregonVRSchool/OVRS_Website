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
	<div class="dropdown">        
        <button class="dropbtn" data-toggle="collapse" data-target="#AndrewCollapse" aria-controls="AndrewCollapse" aria-expanded="true">Andrew</button>
        <div class="dropdown-content collapse multi-collapse show" id="AndrewCollapse">
            <ul>                
                <li><a href="{{ route('information.student.application') }}">Student Information</a></li>
                <li><a href="{{ route('interests.student.application') }}">Student Interests</a></li>
                <li><a href="{{ route('schools.student.application') }}">Previous Schools</a></li>
                <li><a href="{{ route('abilities.student.application') }}">Student Abilities</a></li>
                <li><a href="{{ route('household.student.application') }}">Household Information</a></li>
                <li><a href="{{ route('siblings.student.application') }}">Siblings</a></li>
                <li><a href="{{ route('parentQuestionair.student.application') }}">Parent Questionair</a></li>
                <li><a href="{{ route('studentQuestionair.student.application') }}">Student Questionar</a></li>
                <li><a href="{{ route('recommendation.student.application') }}">Recommendation</a></li>
                <li><a href="{{ route('signature.student.application') }}">Electronic Signature</a></li>
            </ul>
        </div>    
    </div>
@endsection

@section('complement')
    @parent

@endsection