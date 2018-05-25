@extends('layouts.studentApplication')

@section('page-id')
id="new-student"
@endsection

@section('page-title')
	New Student
@endsection

@section('form-content')
	<div class="row">
		<div class="col-md-6"> 
			{!! Form::label('firstName', 'First Name') !!}
			{!! Form::text ('firstName') !!}
		</div>
		<div class="col-md-6 dropdown-section">
			{!! Form::label('year', 'Applying for year:') !!}
			{!! Form::select ('year', ['2020' => '2020', '2021' => '2021']) !!}				
		</div>
	</div>
	<div class="row ">
		<div class="col-md-6"> 
			{!! Form::label('lastName', 'Last Name') !!}
			{!! Form::text ('lastName') !!}
		</div>
		<div class="col-md-6 dropdown-section"> 
			{!! Form::label('grade', 'Applying for grade') !!}
			{!! Form::select ('grade', ['9' => '9', '10' => '10', '11' => '11', '12' => '12']) !!}
		</div>
	</div>
@endsection

@section('buttonRow')
	<div id="submit-buttons" class="row">
		<div class="col-md-6">
			<button name="save">Save</button>
		</div>
		<div class="col-md-6">
			<button name="next">Save and Continue</button>
		</div>
	</div>
@overwrite