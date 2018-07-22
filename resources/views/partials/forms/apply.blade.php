@extends('layouts.app')

@section('content')
	@parent
	<div class="container apply">
	    <div class="row justify-content-center">
	        <div class="col-md-8">
	            <div class="card">
	            	
	                <div class="card-header">
						<div class="apply">
							Apply for a position.
						</div>
					</div>
					<div class="card-body">
						
						<div class="row">
							<div class="col-md-4">
								<button href="#" name="Position" value="volunteer">
									<div class="title">
										Volunteer
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
								<a href="{{ route('new.student.application') }}">								
									<button  name="Position" value="student">
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
								</a>
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
						
					</div>
				</div>
			</div>
		</div>
	</div>
     
@endsection

@section('complement')
    @parent

@endsection