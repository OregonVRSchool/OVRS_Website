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
		{!! Form::text ('firstName', $page->first_name) !!}
		{!! Form::label('middleName', 'Middle Name') !!}
		{!! Form::text ('middleName', $page->middle_name) !!}
		{!! Form::label('lastName', 'Last Name') !!}
		{!! Form::text ('lastName', $page->last_name) !!}
	</div>
	<div class="col-md-6">
		{!! Form::label('suffix', 'Suffix') !!}
		{!! Form::text ('suffix', $page->suffix) !!}
		{!! Form::label('salutation', 'Salutation') !!}
		{!! Form::text ('salutation', $page->salutation) !!}
		{!! Form::label('preferredName', 'Preferred Name') !!}
		{!! Form::text ('preferredName', $page->preferred_name) !!}
	</div>
</div>

<div class="row">
	<div class="col-md-6">
		{!! Form::label('gender', 'Gender') !!}
		{!! Form::text ('gender', $page->gender) !!}
		{!! Form::label('studentRelationship', 'Relationship to student') !!}
		{!! Form::text ('studentRelationship', $page->relationship) !!}
		{!! Form::label('maritalStatus', 'Marital Status') !!}
		{!! Form::text ('maritalStatus', $page->marital_status) !!}		
	</div>
	<div class="col-md-6">
		{!! Form::label('financialResponsibility', 'Financial Responsibility') !!}
		{!! Form::select ('financialResponsibility', [true => "Yes", false => "No"], $page->financial_responsibility) !!}
		{!! Form::label('receiveCorrispondence', 'Receive Corrispondence') !!}
		{!! Form::select ('receiveCorrispondence', [true => "Yes", false => "No"], $page->receive_corrispondence) !!}
		{!! Form::label('custodialRights', 'Custodial Rights') !!}
		{!! Form::select ('custodialRights', [true => "Yes", false => "No"], $page->custodial_rights) !!}
	</div>
</div>

<div class="subsection-header">
	Contact Info
</div>
	
<div class="row">
	<div class="col-md-6">
		{!! Form::label('emailAddress', 'Email Address') !!}
		{!! Form::email ('emailAddress', $page->email) !!}
		{!! Form::label('workPhone', 'Work Phone') !!}
		{!! Form::tel ('workPhone', $page->work_phone) !!}
	</div>
	<div class="col-md-6">
		{!! Form::label('homePhone', 'Home Phone') !!}
		{!! Form::tel ('homePhone', $page->home_phone) !!}
		{!! Form::label('cellPhone', 'Cell Phone') !!}
		{!! Form::tel ('cellPhone', $page->cell_phone) !!}
	</div>
</div>

<div class="subsection-header">
	Occupation
</div>

<div class="row">
	<div class="col-md-6">
		{!! Form::label('occupation', 'Occupation') !!}
		{!! Form::text ('occupation', $page->occupation) !!}
		{!! Form::label('employer', 'Employer') !!}
		{!! Form::text ('employer', $page->employer) !!}
		{!! Form::label('employerAddress', 'Employer Address') !!}
		{!! Form::text ('employerAddress', $page->employer_address) !!}
	</div>
	<div class="col-md-6">
		{!! Form::label('employerCity', 'Employer City') !!}
		{!! Form::text ('employerCity', $page->employer_city) !!}
		{!! Form::label('employerState', 'Employer State') !!}
		{!! Form::text ('employerState', $page->employer_state) !!}
		{!! Form::label('employerZip', 'Employer Zip') !!}
		{!! Form::text ('employerZip', $page->employer_zip) !!}
	</div>
</div>
	
	
	
	
	
	
	
@endsection