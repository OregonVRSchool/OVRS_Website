@extends('layouts.studentApplication')

@section('page-id')
	hosehold-info
@endsection

@section('page-title')
	Hosehold Information
@endsection

@section('form-content')
	{!! Form::label('firstName', 'First Name') !!}
	{!! Form::text ('firstName') !!}
	{!! Form::label('middleName', 'Middle Name') !!}
	{!! Form::text ('middleName') !!}
	{!! Form::label('lastName', 'Last Name') !!}
	{!! Form::text ('lastName') !!}
	{!! Form::label('suffix', 'Suffix') !!}
	{!! Form::text ('suffix') !!}
	{!! Form::label('salutation', 'Salutation') !!}
	{!! Form::text ('salutation') !!}
	{!! Form::label('preferredName', 'Preferred Name') !!}
	{!! Form::text ('preferredName') !!}
	{!! Form::label('gender', 'Gender') !!}
	{!! Form::text ('gender') !!}
	{!! Form::label('studentRelationship', 'Relationship to student') !!}
	{!! Form::text ('studentRelationship') !!}
	{!! Form::label('custodialRights', 'Custodial Rights') !!}
	{!! Form::text ('custodialRights') !!}
	{!! Form::label('financialResponsibility', 'Financial Responsibility') !!}
	{!! Form::text ('financialResponsibility') !!}
	{!! Form::label('receiveCorrispondence', 'Receive Corrispondence') !!}
	{!! Form::text ('receiveCorrispondence') !!}
	{!! Form::label('maritalStatus', 'Marital Status') !!}
	{!! Form::text ('maritalStatus') !!}
	{!! Form::label('emailAddress', 'Email Address') !!}
	{!! Form::text ('emailAddress') !!}
	{!! Form::label('workPhone', 'Work Phone') !!}
	{!! Form::text ('workPhone') !!}
	{!! Form::label('homePhone', 'Home Phone') !!}
	{!! Form::text ('homePhone') !!}
	{!! Form::label('cellPhone', 'Cell Phone') !!}
	{!! Form::text ('cellPhone') !!}
	{!! Form::label('occupation', 'Occupation') !!}
	{!! Form::text ('occupation') !!}
	{!! Form::label('employer', 'Employer') !!}
	{!! Form::text ('employer') !!}
	{!! Form::label('employerAddress', 'Employer Address') !!}
	{!! Form::text ('employerAddress') !!}
	{!! Form::label('employerCity', 'Employer City') !!}
	{!! Form::text ('employerCity') !!}
	{!! Form::label('employerState', 'Employer State') !!}
	{!! Form::text ('employerState') !!}
	{!! Form::label('employerZip', 'Employer Zip') !!}
	{!! Form::text ('employerZip') !!}
	
@endsection