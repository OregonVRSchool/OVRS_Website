@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    Edit Pages
                </div>
                <div class="card-body">
                	<dl>
                		@foreach($map as $category)
                            <dt><a href="/cms/edit/{{ $category->url }}/{{ $category->index->url }}">{{ $category->title }}</a></dt>
                            @foreach($category->pages as $page)
                                <dd><a href="/cms/edit/{{ $category->url }}/{{ $page->url }}">{{ $page->title }}</a></dd>
                            @endforeach
                        @endforeach
                	</ul>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
