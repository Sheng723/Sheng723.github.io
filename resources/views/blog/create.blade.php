@extends('dashboard')

@section('title')
    Create Blog
@endsection

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Create Blog</h1>
                <form method="POST" action="/blog">
                    @csrf
                    @include('blog.fields')
                </form>
            </div>
        </div>
    </div>
@endsection


