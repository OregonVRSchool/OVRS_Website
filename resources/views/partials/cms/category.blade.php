@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
        	<ul>
        		@foreach($categories as $category)
        			<li>
        				<a href="/cms/edit/{{ $category->url }}">{{ $category->title }}</a>
        			</li>
        		@endforeach
        	</ul>
        </div>
    </div>
</div>

@endsection