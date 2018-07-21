@extends('layouts.studentApplication')

@section('page-id')
	student-interests
@endsection

@section('page-title')
	Student Interests
@endsection

@section('form-content')

	<div class="row">
		<div class="col-md-6">
			{!! Form::label('sports', 'Sports') !!}
			{!! Form::text ('sports', $page->sports ) !!}
			{!! Form::label('activities', 'Activities') !!}
			{!! Form::text ('activities', $page->activities ) !!}
			{!! Form::label('performingArts', 'Performing Arts') !!}
			{!! Form::text ('performingArts', $page->performing_arts ) !!}
		</div>
		<div class="col-md-6">
			{!! Form::label('instruments', 'Instruments') !!}
			{!! Form::text ('instruments', $page->instruments ) !!}
			{!! Form::label('computerSkills', 'Computer Skills') !!}
			{!! Form::text ('computerSkills', $page->computer_skills ) !!}
			{!! Form::label('typingSpeed', 'Typing Speed') !!}
			{!! Form::text ('typingSpeed', $page->typing_speed ) !!}
		</div>
	</div>
	
	
	{!! Form::label('awards', 'Please describe any awards, honors or accomplishments you have achieved') !!}
	{!! Form::textarea ('awards', $page->awards, ['size' => '75x3']) !!}
@endsection