@extends('layouts.studentApplication')

@section('page-id')
	parent-questionair
@endsection

@section('page-title')
	Parent Questionair
@endsection

@section('form-content')
	{!! Form::label('questionOne', 'Why do you want your student to attend Oregon VR School') !!}
	{!! Form::text ('questionOne') !!}
	{!! Form::label('questionTwo', 'What priorities do you have for your student’s education') !!}
	{!! Form::text ('questionTwo') !!}
@endsection