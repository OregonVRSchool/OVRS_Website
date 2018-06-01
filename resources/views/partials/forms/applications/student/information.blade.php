@extends('layouts.studentApplication')

@section('page-id')
	student-information
@endsection

@section('page-title')
	Student Information
@endsection

@section('form-content')
	<div class="subsection-header">
		Contact Info
	</div>
	<div class="row">
		<div class="col-md-6">
			{!! Form::label('preferredName', 'Preferred Name') !!}
			{!! Form::text ('preferredName') !!}
			{!! Form::label('steamUsername', 'Steam Username') !!}
			{!! Form::text ('studentUsername') !!}

		</div>
		<div class="col-md-6">
			{!! Form::label('studentEmailAddress','Students Email Address') !!}
			{!! Form::email ('studentEmailAddress') !!}
			{!! Form::label('studentHomePhone', 'Home Phone') !!}
			{!! Form::tel ('studentHomePhone') !!}
			{!! Form::label('studentCellPhone', 'Cell Phone') !!}
			{!! Form::tel ('studentCellPhone') !!}
			
		</div>
	</div>
	<div class="subsection-header">
		Location
	</div>
	<div class="row">
		<div class="col-md-12">
			{!! Form::label('studentAddress', 'Students Address') !!}
			{!! Form::text ('studentAddress') !!}
		</div>
	</div>

	<div class="row">
		<div class="col-md-6">
			{!! Form::label('studentCity', 'City') !!}
			{!! Form::text ('studentCity') !!}
			{!! Form::label('studentState', 'State') !!}
			{!! Form::text ('studentState') !!}
		</div>
		<div class="col-md-6">
			{!! Form::label('studentZip', 'Zip') !!}
			{!! Form::text ('studentZip') !!}
			{!! Form::label('studentCountry', 'Country') !!}
			{!! Form::text ('studentCountry') !!}
		</div>
	</div>

	<div class="subsection-header">
		Equal Opportunity
	</div>

	<div class="row">
		<div class="col-md-6">
			{!! Form::label('studentGender', 'Gender') !!}
			{!! Form::text ('studentGender') !!}
			{!! Form::label('studentEthnicity', 'Ethnicity') !!}
			{!! Form::text ('studentEthnicity') !!}
			{!! Form::label('studentRace', 'Race') !!}
			{!! Form::text ('studentRace') !!}
		</div>
		<div class="col-md-6">
			
			{!! Form::label('studentLanguage', 'Language') !!}
			{!! Form::text ('studentLanguage') !!}
			{!! Form::label('studentBirthCity', 'Birth City') !!}
			{!! Form::text ('studentBirthCity') !!}
			{!! Form::label('studentOtherLanguages', 'Other Languages') !!}
			{!! Form::text ('studentOtherLanguages') !!}
		</div>
	</div>

	<div class="subsection-header">
		Additional Info
	</div>
	
	<div class="row">
		<div class="col-md-6">
			{!! Form::label('studentPicture', 'Picture') !!}
			{!! Form::file ('studentPicture', null) !!}
		</div>
		<div class="col-md-6">
			{!! Form::label('whoReferedUs', 'How did you hear about us') !!}
			{!! Form::text ('whoReferedUs') !!}
		</div>
	</div>	

@endsection