@extends('layouts.studentApplication')

@section('page-id')
	strengths-needs
@endsection

@section('page-title')
	Student Strengths/Needs
@endsection

@section('form-content')
	{!! Form::label('studentStrengths', 'Describe the students strengths') !!}
	{!! Form::textarea ('studentStrengths', $page->strengths, ['size' => '50x3']) !!}
	{!! Form::label('studentNeeds', 'Describe the student needs') !!}
	{!! Form::textarea ('studentNeeds', $page->needs, ['size' => '50x3']) !!}
	{!! Form::label('learningDisability', 'Does the student have a learning disability') !!}
	{!! Form::textarea ('learningDisability', $page->disability, ['size' => '50x3']) !!}
@endsection