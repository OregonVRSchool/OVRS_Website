@extends('layouts.studentApplication')

@section('page-id')
	student-interests
@endsection

@section('page-title')
	Student Interests
@endsection

@section('form-content')
	{!! Form::label('sports', 'Sports') !!}
	{!! Form::text ('sports') !!}
	{!! Form::label('activities', 'Activities') !!}
	{!! Form::text ('activities') !!}
	{!! Form::label('performingArts', 'Performing Arts') !!}
	{!! Form::text ('performingArts') !!}
	{!! Form::label('instruments', 'Instruments') !!}
	{!! Form::text ('instruments') !!}
	{!! Form::label('computerSkills', 'Computer Skills') !!}
	{!! Form::text ('computerSkills') !!}
	{!! Form::label('typingSpeed', 'Typing Speed') !!}
	{!! Form::text ('typingSpeed') !!}
	{!! Form::label('awards', 'Please describe any awards, honors or accomplishments you have achieved') !!}
	{!! Form::text ('awards') !!}
@endsection