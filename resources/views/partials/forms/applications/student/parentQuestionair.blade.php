@extends('layouts.studentApplication')

@section('page-id')
	parent-questionair
@endsection

@section('page-title')
	Parent Questionair
@endsection

@section('form-content')
	{!! Form::label('questionOne', 'Why do you want your student to attend Oregon VR School') !!}
	{!! Form::textarea ('questionOne', $page->question_one, ["size" => "75x 4"]) !!}
	{!! Form::label('questionTwo', 'What priorities do you have for your student’s education') !!}
	{!! Form::textarea ('questionTwo', $page->question_two, ["size" => "75x 4"]) !!}
@endsection