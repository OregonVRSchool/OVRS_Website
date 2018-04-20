@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    Edit Categories
                </div>
                <div class="card-body">
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
    </div>
</div>

@endsection