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
			{!! Form::text ('sports') !!}
			{!! Form::label('activities', 'Activities') !!}
			{!! Form::text ('activities') !!}
			{!! Form::label('performingArts', 'Performing Arts') !!}
			{!! Form::text ('performingArts') !!}
		</div>
		<div class="col-md-6">
			{!! Form::label('instruments', 'Instruments') !!}
			{!! Form::text ('instruments') !!}
			{!! Form::label('computerSkills', 'Computer Skills') !!}
			{!! Form::text ('computerSkills') !!}
			{!! Form::label('typingSpeed', 'Typing Speed') !!}
			{!! Form::text ('typingSpeed') !!}
		</div>
	</div>
	
	
	{!! Form::label('awards', 'Please describe any awards, honors or accomplishments you have achieved') !!}
	{!! Form::textarea ('awards', null, ['size' => '75x3']) !!}
@endsection