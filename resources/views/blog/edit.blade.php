@extends('dashboard')

@section('title')
    Edit Blog
@endsection
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Edit Blog</h1>
                <form method="POST" action="/blog/{{ $blog->id }}">
                    @csrf
                    @method('PUT')
                    @include('blog.fields')
                </form>
            </div>
        </div>
    </div>
@endsection
