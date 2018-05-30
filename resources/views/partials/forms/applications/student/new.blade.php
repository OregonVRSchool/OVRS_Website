@extends('layouts.studentApplication')

@section('page-id')
id="new-student"
@endsection

@section('page-title')
	New Student
@endsection

@section('quicknav-extension')

@overwrite

@section('form-content')
	@if(isset($application))
		<div class="row">
			<div class="col-md-6"> 
				{!! Form::label('firstName', 'First Name') !!}
				{!! Form::text ('firstName', $application->student->first_name) !!}
			</div>
			<div class="col-md-6 dropdown-section">
				{!! Form::label('year', 'Applying for year:') !!}
				{!! Form::select ('year', ['2020' => '2020', '2021' => '2021'], $application->student->year) !!}				
			</div>
		</div>
		<div class="row ">
			<div class="col-md-6"> 
				{!! Form::label('lastName', 'Last Name') !!}
				{!! Form::text ('lastName', $application->student->last_name) !!}
			</div>
			<div class="col-md-6 dropdown-section"> 
				{!! Form::label('grade', 'Applying for grade') !!}
				{!! Form::select ('grade', ['9' => '9', '10' => '10', '11' => '11', '12' => '12'], $application->student->grade) !!}
			</div>
		</div>
	@else
		<div class="row">
			<div class="col-md-6"> 
				{!! Form::label('firstName', 'First Name') !!}
				{!! Form::text ('firstName') !!}
			</div>
			<div class="col-md-6 dropdown-section">
				{!! Form::label('year', 'Applying for year:') !!}
				{!! Form::select ('year', ['2020' => '2020', '2021' => '2021']) !!}				
			</div>
		</div>
		<div class="row ">
			<div class="col-md-6"> 
				{!! Form::label('lastName', 'Last Name') !!}
				{!! Form::text ('lastName') !!}
			</div>
			<div class="col-md-6 dropdown-section"> 
				{!! Form::label('grade', 'Applying for grade') !!}
				{!! Form::select ('grade', ['9' => '9', '10' => '10', '11' => '11', '12' => '12']) !!}
			</div>
		</div>
	@endif
@endsection

@section('buttonRow')
	<div id="submit-buttons" class="row justify-content-md-center">

		<div class="col-md-6">
			<button name="next">Save and Continue</button>
		</div>
	</div>
@overwrite