@extends('layouts.studentApplication')

@section('page-id')
	strengths-needs
@endsection

@section('page-title')
	Student Strengths/Needs
@endsection

@section('form-content')
	{!! Form::label('studentStrengths', 'Describe the students strengths') !!}
	{!! Form::text ('studentStrengths') !!}
	{!! Form::label('studentNeeds', 'Describe the student needs') !!}
	{!! Form::text ('studentNeeds') !!}
	{!! Form::label('learningDisability', 'Does the student have a learning disability') !!}
	{!! Form::text ('learningDisability') !!}
@endsection