@extends('dashboard')

@section('title')
    Show Blog
@endsection

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Show Blog</h1>
                <div class="mb-3">
                    <label for="title" class="form-label ">Title:</label>
                    <div class="border border-primary p-3">{{ $blog->title ?? '' }}</div>
                </div>
                <div class="mb-3">
                    <label for="content" class="form-label">Content:</label>
                    <div class="border border-primary p-3">{{ $blog->content ?? '' }}</div>
                </div>
            </div>
        </div>
    </div>
@endsection
