@extends('layouts.app')

@section('content')
<div class="categories-container py-5">
    <div class="container">
        <!-- Header Section -->
        <div class="text-center mb-5">
            <h2 class="fw-bold display-4 mb-2">Categories</h2>
            <p class="text-muted fs-5">Explore topics and materials curated by our team</p>
            <div class="divider mx-auto" style="width: 60px; height: 3px; background: linear-gradient(90deg, #667eea 0%, #764ba2 100%);"></div>
        </div>

        <!-- Categories Grid -->
        <div class="row g-4">
            @foreach($categories as $category)
                @php
                    // simple two-gradient alternation, adjust as needed
                    $isEven = $loop->index % 2 === 0;
                    $headerGradient = $isEven
                        ? 'linear-gradient(135deg, #667eea 0%, #764ba2 100%)'
                        : 'linear-gradient(135deg, #f093fb 0%, #f5576c 100%)';
                    $initials = strtoupper(substr(trim($category->name), 0, 2));
                    $excerpt = $category->description ?? 'Explore materials and lessons for this category.';
                @endphp

                <div class="col-md-6 col-lg-4">
                    <div class="card h-100 border-0 overflow-hidden transition-all" style="box-shadow: 0 8px 32px rgba(0,0,0,0.08); transition: all 0.3s ease;">
                        <div class="card-header" style="background: {{ $headerGradient }}; height: 120px;"></div>
                        <div class="card-body text-center pt-0">
                            <div class="avatar mx-auto mb-3" style="width: 80px; height: 80px; margin-top: -40px; background: {{ $headerGradient }}; border-radius: 50%; display: flex; align-items: center; justify-content: center; color: white; font-size: 1.6rem; font-weight: 700;">
                                {{ $initials }}
                            </div>
                            <h5 class="card-title fw-bold mb-2">{{ $category->name }}</h5>
                            <p class="text-primary fw-semibold mb-2">Category</p>
                            <p class="card-text text-muted small mb-3">{{ Str::limit($excerpt, 100) }}</p>
                            <a href="{{ route('category.show', $category->slug) }}" class="btn btn-sm btn-outline-primary rounded-pill">View Materials</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>

<style>
    .transition-all:hover {
        transform: translateY(-8px);
        box-shadow: 0 16px 48px rgba(0,0,0,0.12) !important;
    }
    .card {
        border-radius: 12px;
    }
</style>
@endsection
