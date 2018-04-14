@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    <div>
                        Welcome to CMS!
                    </div>
                    <div>
                        What would you like to do?
                    </div>
                    <div>
                        <a href="/cms/create/category">Create Category</a>
                        <a href="/cms/edit/category">Edit Category</a>
                        <a href="/cms/create/page">Create Page</a>
                        <a href="/cms/edit/page">Edit Page</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection