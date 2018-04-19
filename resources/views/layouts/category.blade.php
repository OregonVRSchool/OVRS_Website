@extends('layouts.app')


@section('content')
<div id="{!! $page->category->title !!} ">
     
@show
</div>

@section('complement')
    @parent

@endsection