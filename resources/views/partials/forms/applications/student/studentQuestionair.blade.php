@extends('layouts.studentApplication')

@section('page-id')
	student-questionair
@endsection

@section('page-title')
	Student Questionair
@endsection

@section('form-content')
<div class="subsection-header">
	This form should be completed by the student in his/her own words.
</div>
	{!! Form::label('questionOne', 'Why do you want to attend Oregon VR School') !!}
	{!! Form::textarea ('questionOne', null, ["size" => "75x4"]) !!}
	{!! Form::label('questionTwo', 'What personal qualities and talents will you bring to Oregon VR School') !!}
	{!! Form::textarea ('questionTwo', null, ["size" => "75x4"]) !!}
	{!! Form::label('questionThree', 'Describe yourself as a student. How will the course of studies help you achieve your goals') !!}
	{!! Form::textarea ('questionThree', null, ["size" => "75x4"]) !!}
@endsection