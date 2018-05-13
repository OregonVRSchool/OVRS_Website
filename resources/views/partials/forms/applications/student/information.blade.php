@extends('layouts.studentApplication')

@section('page-id')
	student-information
@endsection

@section('page-title')
	Student Information
@endsection

@section('form-content')
	{!! Form::label('studentName', 'Students Name') !!}
	{!! Form::text ('studentName') !!}
	{!! Form::label('preferredName', 'Preferred Name') !!}
	{!! Form::text ('preferredName') !!}
	{!! Form::label('steamUsername', 'Steam Username') !!}
	{!! Form::text ('studentUsername') !!}
	{!! Form::label('studentEmailAddress','Students Email Address') !!}
	{!! Form::text ('studentEmailAddress') !!}
	{!! Form::label('whoReferedUs', 'How did you hear about us') !!}
	{!! Form::text ('whoReferedUs') !!}

	{!! Form::label('studentAddress', 'Students Address') !!}
	{!! Form::text ('studentAddress') !!}
	{!! Form::label('studentCity', 'City') !!}
	{!! Form::text ('studentCity') !!}
	{!! Form::label('studentState', 'State') !!}
	{!! Form::text ('studentState') !!}
	{!! Form::label('studentZip', 'Zip') !!}
	{!! Form::text ('studentZip') !!}
	{!! Form::label('studentCountry', 'Country') !!}
	{!! Form::text ('studentCountry') !!}
	{!! Form::label('studentHomePhone', 'Home Phone') !!}
	{!! Form::text ('studentHomePhone') !!}
	{!! Form::label('studentCellPhone', 'Cell Phone') !!}
	{!! Form::text ('studentCellPhone') !!}

	{!! Form::label('studentGender', 'Gender') !!}
	{!! Form::text ('studentGender') !!}
	{!! Form::label('studentEthnicity', 'Ethnicity') !!}
	{!! Form::text ('studentEthnicity') !!}
	{!! Form::label('studentRace', 'Race') !!}
	{!! Form::text ('studentRace') !!}
	{!! Form::label('studentLanguage', 'Language') !!}
	{!! Form::text ('studentLanguage') !!}
	{!! Form::label('studentBirthCity', 'Birth City') !!}
	{!! Form::text ('studentBirthCity') !!}
	{!! Form::label('studentOtherLanguages', 'Other Languages') !!}
	{!! Form::text ('studentOtherLanguages') !!}

	{!! Form::label('studentPicture', 'Picture') !!}
	{!! Form::text ('studentPicture') !!}

@endsection