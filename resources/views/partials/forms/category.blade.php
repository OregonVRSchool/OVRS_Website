@extends('layouts.app')

@section('content')
	@parent
	<div class="container">
    	<div class="row justify-content-center">
        	<div class="col-md-8">
				<div class="card">
				    <div id="category-creator">
				    	{!! Form::open(array('url' => '#')) !!}
				    		<div class="card-header">
								Category Name
								<a class="back" href="/cms">Back to CMS</a>
							</div>
							<div class="card-body"> 
								@if(isset($category))
						    		{!! Form::text('title', $category->title); !!} 
						    		{!! Form::submit('Update Category'); !!}
						    	@else
						    		{!! Form::text('title', 'Category'); !!} 
						    		{!! Form::submit('Create Category'); !!}
						    	@endif
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