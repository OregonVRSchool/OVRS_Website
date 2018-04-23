@extends('layouts.app')

@section('content')
	@parent
	<div class="container apply">
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
							Apply for a position.
						</div>
					</div>
					<div class="card-body">
						{!! Form::open(array('url' => '#')) !!} 
							<div class="row">
								<div class="col-md-4">
									<button type="submit" name="Position" value="volenteer">
										<div class="title">
											Volenteer
										</div>
										<div>
											<img src="">
										</div>
										<div class="body">
											How to volenteer today
										</div>
									</button>
								</div>
								<div class="col-md-4">
									<button type="submit" name="Position" value="student">
										<div class="title">
											Student
										</div>
										<div>
											<img src="">
										</div>
										<div class="body">
											Classes start next fall
										</div>
									</button>
								</div>
								<div class="col-md-4">
									<button type="submit" name="Position" value="admin">
										<div class="title">
											Administrator
										</div>
										<div>
											<img src="">
										</div>
										<div class="body">
											We always need teachers
										</div>
									</button>
								</div>
							</div>
						{!! Form::close() !!}
					</div>
				</div>
			</div>
		</div>
	</div>
     
@endsection

@section('complement')
    @parent

@endsection