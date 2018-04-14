@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
        	<ul>
        		@foreach($categories as $category)
                    @foreach($pages as $page)
                        @if($page->category_title == $category->title)
                            @if($page->title == 'index')
                    			<li>
                    				<a href="/cms/edit/{{ $category->url }}/{{ $page->url }}">{{ $category->title }}</a>
                                    <ul>
                            @else
                                <li><a href="/cms/edit/{{ $category->url }}/{{ $page->url }}">{{ $page->title }}</a></li>
                            @endif
                            </ul></li>
                        @endif
                    @endforeach
        		@endforeach
        	</ul>
        </div>
    </div>
</div>

@endsection