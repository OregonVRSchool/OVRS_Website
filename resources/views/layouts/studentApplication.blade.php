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
                <li><a href="student/information">Student Information</a></li>
                <li><a href="student/interests">Student Interests</a></li>
                <li><a href="student/schools">Previous Schools</a></li>
                <li><a href="student/abilities">Student Abilities</a></li>
                <li><a href="student/household">Household Information</a></li>
                <li><a href="student/siblings">Siblings</a></li>
                <li><a href="student/parentQuestionair">Parent Questionair</a></li>
                <li><a href="student/studentQuestionair">Student Questionar</a></li>
                <li><a href="student/recommendation">Recommendation</a></li>
                <li><a href="student/signature">Electronic Signature</a></li>
            </ul>
        </div>    
    </div>
@endsection

@section('complement')
    @parent

@endsection