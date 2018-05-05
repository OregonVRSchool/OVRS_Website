@extends('layouts.app')

@section('content')
<div class="container">
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
			    <div id="page-creator">
			    	{!! Form::open(array('url' => '#')) !!} 

			    		@if (isset($page))	
			    			@if ($page->title != 'index')
			    				<div class="card-header"> 	
			    					Edit Page
			    					<a class="back" href="/cms">Back to CMS</a>
			    				</div>
				    			<div class="card-body">
				    				{!! Form::label('title', 'Title'); !!}		
						    		{!! Form::text('title', $page->title); !!} 
					    			{!! Form::select('category', $dropdownlist, $page->category_id, ['placeholder' => 'Category']); !!}
					    	@else
				    			<div class="card-body">

				    		@endif
						    	{!! Form::label('content', 'Content'); !!}   
						    	{!! Form::textarea('content', $page->content); !!}
						    	{!! Form::submit('Update Page'); !!}
						    </div>
					    @else
					    	<div class="card-header"> 
						    	New Page
		    					<a class="back" href="/cms">Back to CMS</a>
					    	</div>
					    	<div class="card-body">
					    		{!! Form::label('title', 'Title'); !!}
						    	{!! Form::text('title'); !!} 
					    		{!! Form::select('category', $dropdownlist, null, ['placeholder' => 'Category']); !!}
						    	{!! Form::label('content', 'Content'); !!}   
						    	{!! Form::textarea('content'); !!}
						    	{!! Form::submit('Create Page'); !!}
						    </div>
					    @endif

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