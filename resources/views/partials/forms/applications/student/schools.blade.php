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
	<div class="subsection-header">
		Location
	</div>
	<div class="row">
		<div class="col-md-6">
			{!! Form::label('address', 'Address') !!}
			{!! Form::text ('address') !!}
			{!! Form::label('phone', 'Phone Number') !!}
			{!! Form::text ('phone') !!}
		</div>
		<div class="col-md-6">
			{!! Form::label('fromDate', 'From Date') !!}
			{!! Form::text ('fromDate') !!}
			{!! Form::label('toDate', 'To Date') !!}
			{!! Form::text ('toDate') !!}
			{!! Form::label('gradeCompleted', 'Highest Grade Completed') !!}
		{!! Form::text ('gradeCompleted') !!}
		</div>
	</div>

	<div class="subsection-header">
		Teacher References
	</div>	
	
	{!! Form::label('mathTeacher', 'Name of students current Math teacher') !!}
	{!! Form::text ('mathTeacher') !!}
	{!! Form::label('englishTeacher', 'Name of students current English teacher') !!}
	{!! Form::text ('englishTeacher') !!}
	{!! Form::label('computerTeacher', 'Name of students current Computer teacher') !!}
	{!! Form::text ('computerTeacher') !!}

	<div class="subsection-header"> 
		Student Conduct
	</div>

	{!! Form::label('expelled', 'Has the student ever been expelled') !!}
	{!! Form::textarea ('expelled', null, ['size' => '50x3']) !!}
	{!! Form::label('suspended', 'Has the student ever been suspended') !!}
	{!! Form::textarea ('suspended', null, ['size' => '50x3']) !!}
	{!! Form::label('skippedGrade', 'Has the student ever skipped a grade') !!}
	{!! Form::textarea ('skippedGrade', null, ['size' => '50x3']) !!}

	<div class="subsection-header">
		Educational Plans
	</div>

	{!! Form::label('iep', 'Does the student have an (IEP) or 504 plan') !!}
	{!! Form::select ('iep', array('Y' => 'Yes', 'N' => 'No'), 'N') !!}
@endsection