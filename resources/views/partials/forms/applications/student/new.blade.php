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

@section('buttonRow')
	<div class="row">
		<div class="col-md-4">
			
		</div>
		<div class="col-md-4">
			<button>Middle</button>
		</div>
		<div class="col-md-4">
			<button>Right</button>
		</div>
	</div>
@overwrite