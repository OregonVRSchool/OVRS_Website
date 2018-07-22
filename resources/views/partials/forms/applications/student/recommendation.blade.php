@extends('layouts.studentApplication')

@section('page-id')
	recommendation
@endsection

@section('page-title')
	Recommendations
@endsection

@section('form-content')
	<div class="row">
		<div class="col-md-6">
			{!! Form::label('refferalName', 'Refferal Name') !!}
			{!! Form::text ('refferalName', $page->name) !!}
		</div>
		<div class="col-md-6">
			{!! Form::label('refferalEmail', 'Refferal Email') !!}
			{!! Form::email ('refferalEmail', $page->email) !!}
		</div>
	</div>	

@endsection