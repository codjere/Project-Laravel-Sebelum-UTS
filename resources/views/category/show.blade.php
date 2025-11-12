@extends('layouts.app')

@section('content')
<div class="container">
    <h2 class="fw-bold text-center mb-4">{{ $category->name }}</h2>

    @if($posts->count())
        <div class="row g-4">
            @foreach($posts as $post)
                <div class="col-md-6 col-lg-4">
                    <div class="card h-100 border-0 overflow-hidden transition-all" style="box-shadow: 0 8px 32px rgba(0,0,0,0.1); transition: all 0.3s ease;">
                        <div class="card-header bg-gradient" style="background: linear-gradient(135deg, #667eea 0%, #764ba2 100%); height: 120px;"></div>
                        <div class="card-body text-center pt-0">
                            <h5 class="card-title fw-bold mb-2">{{ $post->title }}</h5>
                            <p class="card-text text-muted small mb-3">
                                By {{ $post->writer->name ?? 'Unknown Writer' }}
                            </p>
                            <a href="{{ route('post.show', $post->slug) }}" class="btn btn-sm btn-outline-primary rounded-pill">
                                Read More
                            </a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

        <div class="d-flex justify-content-center mt-4">
            {{ $posts->links() }}
        </div>
    @else
        <p class="text-center text-muted">No posts available in this category.</p>
    @endif
</div>

<style>
    .transition-all:hover {
        transform: translateY(-8px);
        box-shadow: 0 16px 48px rgba(0,0,0,0.15) !important;
    }
    .card {
        border-radius: 12px;
    }
</style>
@endsection
