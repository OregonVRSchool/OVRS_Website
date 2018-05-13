@extends('layouts.studentApplication')

@section('page-id')
	previous-schools
@endsection

@section('page-title')
	Previous Schools
@endsection

@section('form-content')
	{!! Form::label('schoolName', 'School Name') !!}
	{!! Form::text ('schoolName') !!}	
	{!! Form::label('address', 'Address') !!}
	{!! Form::text ('address') !!}
	{!! Form::label('phone', 'Phone') !!}
	{!! Form::text ('phone') !!}
	{!! Form::label('fromDate', 'From Date') !!}
	{!! Form::text ('fromDate') !!}
	{!! Form::label('toDate', 'To Date') !!}
	{!! Form::text ('toDate') !!}
	{!! Form::label('gradeCompleted', 'Grade Completed') !!}
	{!! Form::text ('gradeCompleted') !!}
	
	{!! Form::label('mathTeacher', 'Name of students current Math teacher') !!}
	{!! Form::text ('mathTeacher') !!}
	{!! Form::label('englishTeacher', 'Name of students current English teacher') !!}
	{!! Form::text ('englishTeacher') !!}
	{!! Form::label('computerTeacher', 'Name of students current Computer teacher') !!}
	{!! Form::text ('computerTeacher') !!}

	{!! Form::label('expelled', 'Has the student ever been expelled') !!}
	{!! Form::text ('expelled') !!}
	{!! Form::label('suspended', 'Has the student ever been suspended') !!}
	{!! Form::text ('suspended') !!}
	{!! Form::label('skippedGrade', 'Has the student ever skipped a grade') !!}
	{!! Form::text ('skippedGrade') !!}

	{!! Form::label('iep', 'Does the student have an (IEP) or 504 plan') !!}
	{!! Form::text ('iep') !!}
@endsection