@extends('layouts.studentApplication')

@section('page-id')
	recommendation
@endsection

@section('page-title')
	Recommendations
@endsection

@section('form-content')
	{!! Form::label('refferalName', 'Refferal Name') !!}
	{!! Form::text ('refferalName') !!}
	{!! Form::label('refferalEmail', 'Refferal Email') !!}
	{!! Form::text ('refferalEmail') !!}
	<div>
		PARENT AUTHORIZATION
	</div>
	<div>
		I hereby authorize my student’s school to prepare and submit the recommendation required by Oregon VR School in the admissions process. I understand that this evaluation is confidential and may not be reviewed by the applicant or the applicant’s parent / guardian. The evaluation will be used only in the admissions process and will not become part of the student’s permanent record.
	</div>
	{!! Form::label('parentSigniture', 'Parent Signiture') !!}
	{!! Form::text ('parentSigniture') !!}
	{!! Form::label('parrentName', 'Parrent Name') !!}
	{!! Form::text ('parrentName') !!}
	{!! Form::label('date', 'Date') !!}
	{!! Form::text ('date') !!}
	{!! Form::label('documentUpload', 'Document Upload') !!}
	{!! Form::label('releaseForm', 'Permission for Release of Records Form
IEP
') !!}
	{!! Form::text ('releaseForm') !!}
@endsection