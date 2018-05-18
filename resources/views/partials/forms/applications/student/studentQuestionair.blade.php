@extends('layouts.studentApplication')

@section('page-id')
	student-questionair
@endsection

@section('page-title')
	Student Questionair
@endsection

@section('form-content')
	{!! Form::label('instructions', 'This form should be completed by the student in his/her own words.') !!}
	{!! Form::label('questionOne', 'Why do you want to attend Oregon VR School') !!}
	{!! Form::text ('questionOne') !!}
	{!! Form::label('questionTwo', 'What personal qualities and talents will you bring to Oregon VR School') !!}
	{!! Form::text ('questionTwo') !!}
	{!! Form::label('questionThree', 'Why do you want to attend Oregon VR School') !!}
	{!! Form::text ('questionThree') !!}
@endsection