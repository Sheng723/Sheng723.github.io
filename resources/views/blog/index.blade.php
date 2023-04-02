@extends('dashboard')

@section('title')
    Blogs
@endsection

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="d-flex flex-lg-row justify-between align-items-center">
                    <h1>Blogs</h1>
                    <a type="button" class="btn btn-primary" href="{{ route('blog.create') }}">Create Blog</a>
                </div>
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th scope="col">id</th>
                            <th scope="col">Title</th>
                            <th scope="col">Content</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($blogs as $blog)
                            <tr>
                                <th scope="row">{{ $blog->id }}</th>
                                <td>{{mb_strimwidth($blog->title, 0, 50, "...")}}</td>
                                <td>{{mb_strimwidth($blog->content, 0, 50, "...")}}</td>
                                <td class="d-sm-flex justify-center">
                                    <a href="/blog/{{ $blog->id }}" class="btn btn-primary m-1"><i class="fas fa-eye"></i></a>
                                    <a href="/blog/{{ $blog->id }}/edit" class="btn btn-primary m-1"><i class="fas fa-edit"></i></a>
                                    <form action="/blog/{{ $blog->id }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger m-1"><i class="fa fa-trash" aria-hidden="true"></i></button>
                                    </form>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
