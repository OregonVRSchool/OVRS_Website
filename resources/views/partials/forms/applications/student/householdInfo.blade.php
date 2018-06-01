@extends('layouts.studentApplication')

@section('page-id')
	hosehold-info
@endsection

@section('page-title')
	Hosehold Information
@endsection

@section('form-content')
<div class="subsection-header">
	Parent Information
</div>
<div class="row">
	<div class="col-md-6">
		{!! Form::label('firstName', 'First Name') !!}
		{!! Form::text ('firstName') !!}
		{!! Form::label('middleName', 'Middle Name') !!}
		{!! Form::text ('middleName') !!}
		{!! Form::label('lastName', 'Last Name') !!}
		{!! Form::text ('lastName') !!}
	</div>
	<div class="col-md-6">
		{!! Form::label('suffix', 'Suffix') !!}
		{!! Form::text ('suffix') !!}
		{!! Form::label('salutation', 'Salutation') !!}
		{!! Form::text ('salutation') !!}
		{!! Form::label('preferredName', 'Preferred Name') !!}
		{!! Form::text ('preferredName') !!}
	</div>
</div>

<div class="row">
	<div class="col-md-6">
		{!! Form::label('gender', 'Gender') !!}
		{!! Form::text ('gender') !!}
		{!! Form::label('studentRelationship', 'Relationship to student') !!}
		{!! Form::text ('studentRelationship') !!}
		{!! Form::label('maritalStatus', 'Marital Status') !!}
		{!! Form::text ('maritalStatus') !!}		
	</div>
	<div class="col-md-6">
		{!! Form::label('financialResponsibility', 'Financial Responsibility') !!}
		{!! Form::select ('financialResponsibility', ["Y" => "Yes", "N" => "No"], "Y") !!}
		{!! Form::label('receiveCorrispondence', 'Receive Corrispondence') !!}
		{!! Form::select ('receiveCorrispondence', ["Y" => "Yes", "N" => "No"], "Y") !!}
		{!! Form::label('custodialRights', 'Custodial Rights') !!}
		{!! Form::select ('custodialRights', ["Y" => "Yes", "N" => "No"], "Y") !!}
	</div>
</div>

<div class="subsection-header">
	Contact Info
</div>
	
<div class="row">
	<div class="col-md-6">
		{!! Form::label('emailAddress', 'Email Address') !!}
		{!! Form::email ('emailAddress') !!}
		{!! Form::label('workPhone', 'Work Phone') !!}
		{!! Form::tel ('workPhone') !!}
	</div>
	<div class="col-md-6">
		{!! Form::label('homePhone', 'Home Phone') !!}
		{!! Form::tel ('homePhone') !!}
		{!! Form::label('cellPhone', 'Cell Phone') !!}
		{!! Form::tel ('cellPhone') !!}
	</div>
</div>

<div class="subsection-header">
	Occupation
</div>

<div class="row">
	<div class="col-md-6">
		{!! Form::label('occupation', 'Occupation') !!}
		{!! Form::text ('occupation') !!}
		{!! Form::label('employer', 'Employer') !!}
		{!! Form::text ('employer') !!}
		{!! Form::label('employerAddress', 'Employer Address') !!}
		{!! Form::text ('employerAddress') !!}
	</div>
	<div class="col-md-6">
		{!! Form::label('employerCity', 'Employer City') !!}
		{!! Form::text ('employerCity') !!}
		{!! Form::label('employerState', 'Employer State') !!}
		{!! Form::text ('employerState') !!}
		{!! Form::label('employerZip', 'Employer Zip') !!}
		{!! Form::text ('employerZip') !!}
	</div>
</div>
	
	
	
	
	
	
	
@endsection