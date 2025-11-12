@extends('layouts.app')

@section('content')
<div class="text-center mb-5">
    <h1 class="fw-bold">All Posts</h1>
    <p class="text-muted">Explore all learning articles from our database.</p>
</div>

<div class="row">
    @foreach($posts as $post)
        <div class="col-md-6 mb-4">
            <div class="card shadow-sm h-100">
                <img src="https://picsum.photos/600/300?random={{ $post->id }}" class="card-img-top" alt="{{ $post->title }}">
                <div class="card-body">
                    <h5 class="card-title">{{ $post->title }}</h5>
                    <p class="text-muted">{{ Str::limit($post->body, 100) }}</p>
                    <p><small>By {{ $post->writer->name ?? 'Unknown' }}</small></p>
                    <a href="{{ route('post.show', $post->slug) }}" class="btn btn-primary">Read More</a>
                </div>
            </div>
        </div>
    @endforeach
</div>
@endsection
