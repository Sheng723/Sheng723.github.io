@extends('welcome')
@section('title')
    Blogs
@endsection

@section('content')
    <div class="container py-4">
        <h1 class="pb-4">Blogs</h1>
        <div class="row">
            @foreach ($blogs as $blog)
                <div class="col-12 col-md-6 col-lg-4 mb-3">
                    <button type="button" class="card w-100 h-100" style="min-height: 10rem;" data-bs-toggle="modal"
                        data-bs-target="#{{ $blog->id }}">
                        <div class="card-body">
                            <h5 class="card-title">{{ $blog->title }}</h5>
                            <p class="card-text">{{ mb_strimwidth($blog->content, 0, 50, '...') }}</p>
                        </div>
                    </button>
                </div>
                <div class="modal fade" id="{{ $blog->id }}" tabindex="-1" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <h1>{{ $blog->title }}</h1>
                                <p>{{ $blog->content }}</p>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
    </div>
@endsection
