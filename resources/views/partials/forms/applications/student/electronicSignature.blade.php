@extends('layouts.studentApplication')

@section('page-id')
	electronic-signature
@endsection

@section('page-title')
	Electronic Signature
@endsection

	<div class="subsection-header">
		PARENT AUTHORIZATION
	</div>
	<p>
		My signature below affirms that all of the information contained in this application is correct, complete, and honestly presented. I understand that withholding or misrepresenting information in this application may jeopardize my child's admission.
	</p>
	<p>
		I hereby authorize my student’s school to prepare and submit the recommendation required by Oregon VR School in the admissions process. I understand that this evaluation is confidential and may not be reviewed by the applicant or the applicant’s parent / guardian. The evaluation will be used only in the admissions process and will not become part of the student’s permanent record.
	</p>
	<p>
		The electronic signatures below and their related fields are treated by Oregon VR School like a physical handwritten signature on a paper form.
	</p>

	<div class="checkbox-container">
		
		<input name="parentSigniture" type="checkbox" value="value" id="parentSigniture">
	</div>
	<label class="checkbox-label">Check for Electronic Signature</label>
	
	<div class="row">
		<div class="col-md-6">
			{!! Form::label('parentName', 'Parent Name') !!}
			{!! Form::text ('parentName') !!}
			{!! Form::label('date', 'Date') !!}
			{!! Form::date('date', \Carbon\Carbon::now()) !!}
		</div>
	</div>
	<div class="subsection-header">
		Document Upload
	</div>

	{!! Form::label('releaseForm', 'Permission for Release of Records Form') !!}
	{!! Form::file ('releaseForm', null) !!}
@endsection