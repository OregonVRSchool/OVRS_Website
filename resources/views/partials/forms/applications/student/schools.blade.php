@extends('layouts.studentApplication')

@section('page-id')
	previous-schools
@endsection

@section('page-title')
	Previous Schools
@endsection

@section('form-content')

	{!! Form::label('schoolName', 'School Name') !!}
	{!! Form::text ('schoolName', $page->name) !!}	
	<div class="subsection-header">
		Location
	</div>
	<div class="row">
		<div class="col-md-6">
			{!! Form::label('address', 'Address') !!}
			{!! Form::text ('address', $page->address) !!}
			{!! Form::label('phone', 'Phone Number') !!}
			{!! Form::tel ('phone', $page->phone) !!}
		</div>
		<div class="col-md-6">
			{!! Form::label('fromDate', 'From Date') !!}
			{!! Form::date ('fromDate', $page->from_date) !!}
			{!! Form::label('toDate', 'To Date') !!}
			{!! Form::date ('toDate', $page->to_date) !!}
			{!! Form::label('gradeCompleted', 'Highest Grade Completed') !!}
			{!! Form::text ('gradeCompleted', $page->grade_completed) !!}
		</div>
	</div>

	<div class="subsection-header">
		Teacher References
	</div>	
	
	{!! Form::label('mathTeacher', 'Name of students current Math teacher') !!}
	{!! Form::text ('mathTeacher', $page->math_teacher) !!}
	{!! Form::label('englishTeacher', 'Name of students current English teacher') !!}
	{!! Form::text ('englishTeacher', $page->english_teacher) !!}
	{!! Form::label('computerTeacher', 'Name of students current Computer teacher') !!}
	{!! Form::text ('computerTeacher', $page->computer_teacher) !!}

	<div class="subsection-header"> 
		Student Conduct
	</div>

	{!! Form::label('expelled', 'Has the student ever been expelled') !!}
	{!! Form::textarea ('expelled', $page->expelled, ['size' => '50x3']) !!}
	{!! Form::label('suspended', 'Has the student ever been suspended') !!}
	{!! Form::textarea ('suspended', $page->suspended, ['size' => '50x3']) !!}
	{!! Form::label('skippedGrade', 'Has the student ever skipped a grade') !!}
	{!! Form::textarea ('skippedGrade', $page->skipped, ['size' => '50x3']) !!}

	<div class="subsection-header">
		Educational Plans
	</div>

	{!! Form::label('iep', 'Does the student have an (IEP) or 504 plan') !!}
	{!! Form::select ('iep', array(true => 'Yes', false => 'No'), $page->iep) !!}
@endsection