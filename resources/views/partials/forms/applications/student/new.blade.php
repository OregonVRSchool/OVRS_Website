@extends('layouts.studentApplication')

@section('page-id')
	new-student
@endsection

@section('page-title')
	New Student
@endsection

@section('form-content')
	{!! Form::label('firstName', 'First Name') !!}
	{!! Form::text ('firstName') !!}
	{!! Form::label('lastName', 'Last Name') !!}
	{!! Form::text ('lastName') !!}
	{!! Form::label('year', 'Year') !!}
	{!! Form::text ('year') !!}
	{!! Form::label('grade', 'Grade') !!}
	{!! Form::text ('grade') !!}
@endsection