@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
        	<ul>
        		@foreach($map as $category)
                    <li><a href="/cms/edit/{{ $category->url }}/{{ $category->index->url }}">{{ $category->title }}</a></li>
                    <ul>
                        @foreach($category->pages as $page)
                            <li><a href="/cms/edit/{{ $category->url }}/{{ $page->url }}">{{ $page->title }}</a></li>
                        @endforeach
                    </ul>
                @endforeach
        	</ul>
        </div>
    </div>
</div>

@endsection
