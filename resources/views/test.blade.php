@extends('layouts.app')

@section('content')
	@parent
	<div class="container test">
	    <div class="row justify-content-center">
	        <div class="col-md-8">
	            <div class="card">
	            	@if ($errors->any())
					    <div class="alert alert-danger">
					        <ul>
					            @foreach ($errors->all() as $error)
					                <li>{{ $error }}</li>
					            @endforeach
					        </ul>
					    </div>
					@endif
	                <div class="card-header">
						<div class="apply">
							test
						</div>
					</div>
					<div class="card-body">
						{{ Auth::user() }}
					</div>
				</div>
			</div>
		</div>
	</div>
     
@endsection

@section('complement')
    @parent

@endsection