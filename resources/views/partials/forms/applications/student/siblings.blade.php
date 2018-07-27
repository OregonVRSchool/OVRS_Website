@extends('layouts.studentApplication')

@section('page-id')
	siblings
@endsection

@section('page-title')
	Siblings
@endsection

@section('form-content')
	{!! Form::label('hasSiblings', 'Does the applicant have any other relatives who currently attend, have attended or have graduated from our school') !!}
	{!! Form::select ('hasSiblings', [true => "Yes", false => "No"], $page->hasSiblings) !!}

	<div class="row">
		<div class="col-md-6">
			{!! Form::label('firstName', 'First Name') !!}
			{!! Form::text ('firstName', $page->first_name) !!}
			{!! Form::label('lastName', 'Last Name') !!}
			{!! Form::text ('lastName', $page->last_name) !!}
			{!! Form::label('userName', 'User Name') !!}
			{!! Form::text ('userName', $page->username) !!}
		</div>
		<div class="col-md-6">
			{!! Form::label('studentID', 'Student ID') !!}
			{!! Form::text ('studentID', $page->student_id) !!}
			{!! Form::label('relationship', 'Relationship to Applicant') !!}
			{!! Form::text ('relationship', $page->relationship) !!}
			{!! Form::label('yearsAttended', 'Years Attended') !!}
			{!! Form::text ('yearsAttended', $page->years_attended) !!}
		</div>
	</div>
	
	
@endsection