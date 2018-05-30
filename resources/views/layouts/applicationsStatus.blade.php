@extends('layouts.app')

@section('content')
	@parent
	 <div class="container">
    	<div class="row justify-content-center">
        	<div class="col-md-12">
				<div class="card">
					<div class="card-header">
						Applications
					</div>
		    		<div class="card-body">
		    			<table>
		    				<tr>
		    					<th>Student</th>
		    					<th>School Year Applied</th>
		    					<th>Grade Level</th>
		    					<th>Application Status</th>
		    					<th>Admission Progress</th>
		    				</tr>
		    				@foreach($applications as $application)
			    				<tr>
			    					<td>{{ $application->student->first_name }} {{ $application->student->last_name }}</td>
			    					<td>{{ $application->student->year }}</td>
			    					<td>{{ $application->student->grade }}</td>
			    					<td>{{ $application->student->status }} <a href="{{ route('new.student.application',  ['id' => $application->id ]) }}">(edit)</a></td>
			    					<td>{{ $application->progress }}</td>
			    					<td><a href="{{ route('delete-student', ['id' => $application->id ]) }}">delete</a></td>
			    				</tr>
		    				@endforeach
		    			</table>
		    		</div>
		    	</div>
		    </div>
		</div>
	</div>

@endsection

@section('complement')
    @parent   

@endsection