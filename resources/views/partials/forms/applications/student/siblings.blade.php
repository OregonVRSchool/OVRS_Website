@extends('layouts.studentApplication')

@section('page-id')
	siblings
@endsection

@section('page-title')
	Siblings
@endsection

@section('form-content')
	{!! Form::label('hasSiblings', 'Does the applicant have any other relatives who currently attend, have attended or have graduated from our school') !!}
	{!! Form::text ('hasSiblings') !!}
	{!! Form::label('firstName', 'First Name') !!}
	{!! Form::text ('firstName') !!}
	{!! Form::label('lastName', 'Last Name') !!}
	{!! Form::text ('lastName') !!}
	{!! Form::label('userName', 'user Name') !!}
	{!! Form::text ('userName') !!}
	{!! Form::label('studnetID', 'StudnetID') !!}
	{!! Form::text ('studnetID') !!}
	{!! Form::label('relationship', 'Relationship to applicant') !!}
	{!! Form::text ('relationship') !!}
	{!! Form::label('yearsAttended', 'Years Attended') !!}
	{!! Form::text ('yearsAttended') !!}
@endsection