@extends('layouts.studentApplication')

@section('page-id')
	siblings
@endsection

@section('page-title')
	Siblings
@endsection

@section('form-content')
	{!! Form::label('hasSiblings', 'Does the applicant have any other relatives who currently attend, have attended or have graduated from our school') !!}
	{!! Form::select ('hasSiblings', [true => "Yes", false => "No"], true) !!}

	<div class="row">
		<div class="col-md-6">
			{!! Form::label('firstName', 'First Name') !!}
			{!! Form::text ('firstName') !!}
			{!! Form::label('lastName', 'Last Name') !!}
			{!! Form::text ('lastName') !!}
			{!! Form::label('userName', 'User Name') !!}
			{!! Form::text ('userName') !!}
		</div>
		<div class="col-md-6">
			{!! Form::label('studentID', 'Student ID') !!}
			{!! Form::text ('studentID') !!}
			{!! Form::label('relationship', 'Relationship to Applicant') !!}
			{!! Form::text ('relationship') !!}
			{!! Form::label('yearsAttended', 'Years Attended') !!}
			{!! Form::text ('yearsAttended') !!}
		</div>
	</div>
	
	
@endsection