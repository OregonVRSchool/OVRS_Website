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
		    				<tr>
		    					<td>test Student</td>
		    					<td>This year</td>
		    					<td>10</td>
		    					<td>Open <a href="#">(edit)</a></td>
		    					<td>not submitted</td>
		    					<td><a href="#">delete</a></td>
		    				</tr>
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