@extends('layouts.studentApplication')

@section('page-id')
	id="student-information"
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
			{!! Form::text ('preferredName', $page->preferred_name ) !!}
			{!! Form::label('steamUsername', 'Steam Username') !!}
			{!! Form::text ('steamUsername', $page->steam_username) !!}

		</div>
		<div class="col-md-6">
			{!! Form::label('studentEmailAddress','Students Email Address') !!}
			{!! Form::email ('studentEmailAddress', $page->email) !!}
			{!! Form::label('studentHomePhone', 'Home Phone') !!}
			{!! Form::tel ('studentHomePhone', $page->home_phone) !!}
			{!! Form::label('studentCellPhone', 'Cell Phone') !!}
			{!! Form::tel ('studentCellPhone', $page->cell_phone) !!}
			
		</div>
	</div>
	<div class="subsection-header">
		Location
	</div>
	<div class="row">
		<div class="col-md-12">
			{!! Form::label('studentAddress', 'Students Address') !!}
			{!! Form::text ('studentAddress', $page->address) !!}
		</div>
	</div>

	<div class="row">
		<div class="col-md-6">
			{!! Form::label('studentCity', 'City') !!}
			{!! Form::text ('studentCity', $page->city) !!}
			{!! Form::label('studentState', 'State') !!}
			{!! Form::text ('studentState', $page->state) !!}
		</div>
		<div class="col-md-6">
			{!! Form::label('studentZip', 'Zip') !!}
			{!! Form::text ('studentZip', $page->zip) !!}
			{!! Form::label('studentCountry', 'Country') !!}
			{!! Form::text ('studentCountry', $page->country) !!}
		</div>
	</div>

	<div class="subsection-header">
		Equal Opportunity
	</div>

	<div class="row">
		<div class="col-md-6">
			{!! Form::label('studentGender', 'Gender') !!}
			{!! Form::text ('studentGender', $page->gender) !!}
			{!! Form::label('studentEthnicity', 'Ethnicity') !!}
			{!! Form::text ('studentEthnicity', $page->ethnicity) !!}
			{!! Form::label('studentRace', 'Race') !!}
			{!! Form::text ('studentRace', $page->race) !!}
		</div>
		<div class="col-md-6">
			
			{!! Form::label('studentLanguage', 'Language') !!}
			{!! Form::text ('studentLanguage', $page->language) !!}
			{!! Form::label('studentBirthCity', 'Birth City') !!}
			{!! Form::text ('studentBirthCity', $page->birth_city) !!}
			{!! Form::label('studentOtherLanguages', 'Other Languages') !!}
			{!! Form::text ('studentOtherLanguages', $page->other_languages) !!}
		</div>
	</div>

	<div class="subsection-header">
		Additional Info
	</div>
	
	<div class="row">
		<div class="col-md-6">
			{!! Form::label('studentPicture', 'Picture') !!}
			@include('partials.forms.applications.parts.fileUpload')			
		</div>
		<div class="col-md-6">
			{!! Form::label('whoReferredUs', 'How did you hear about us') !!}
			{!! Form::text ('whoReferredUs', $page->referred_by) !!}
		</div>
	</div>	

@endsection