@extends('layouts.app')

@section('content')
<div class="courses-container py-5">
    <div class="container">
        <!-- Header Section -->
        <div class="text-center mb-5">
            <h2 class="fw-bold display-4 mb-2">Featured Courses</h2>
            <p class="text-muted fs-5">Explore our curated learning materials</p>
            <div class="divider mx-auto" style="width: 60px; height: 3px; background: linear-gradient(90deg, #667eea 0%, #764ba2 100%);"></div>
        </div>

        <!-- Courses Grid -->
        <div class="row g-4">
            <!-- Course Card 1 -->
            <div class="col-md-6 col-lg-4">
                <div class="card h-100 border-0 overflow-hidden transition-all" style="box-shadow: 0 8px 32px rgba(0,0,0,0.1); transition: all 0.3s ease;">
                    <div class="card-header bg-gradient" style="background: linear-gradient(135deg, #667eea 0%, #764ba2 100%); height: 120px;"></div>
                    <div class="card-body text-center pt-0">
                        <div class="avatar mx-auto mb-3" style="width: 80px; height: 80px; margin-top: -40px; background: linear-gradient(135deg, #667eea 0%, #764ba2 100%); border-radius: 50%; display: flex; align-items: center; justify-content: center; color: white; font-size: 2rem; font-weight: bold;">ML</div>
                        <h5 class="card-title fw-bold mb-2">Machine Learning Basics</h5>
                        <p class="text-primary fw-semibold mb-2">AI & Data Science</p>
                        <p class="card-text text-muted small mb-3">Learn the core algorithms that drive AI and data prediction systems.</p>
                        <a href="{{ url('/post/machine-learning-basics') }}" class="btn btn-sm btn-outline-primary rounded-pill">Read More</a>
                    </div>
                </div>
            </div>

            <!-- Course Card 2 -->
            <div class="col-md-6 col-lg-4">
                <div class="card h-100 border-0 overflow-hidden transition-all" style="box-shadow: 0 8px 32px rgba(0,0,0,0.1); transition: all 0.3s ease;">
                    <div class="card-header bg-gradient" style="background: linear-gradient(135deg, #f093fb 0%, #f5576c 100%); height: 120px;"></div>
                    <div class="card-body text-center pt-0">
                        <div class="avatar mx-auto mb-3" style="width: 80px; height: 80px; margin-top: -40px; background: linear-gradient(135deg, #f093fb 0%, #f5576c 100%); border-radius: 50%; display: flex; align-items: center; justify-content: center; color: white; font-size: 2rem; font-weight: bold;">CS</div>
                        <h5 class="card-title fw-bold mb-2">Cybersecurity 101</h5>
                        <p class="text-danger fw-semibold mb-2">Security & Hacking</p>
                        <p class="card-text text-muted small mb-3">Understand the key concepts behind protecting systems and networks.</p>
                        <a href="{{ url('/post/cybersecurity-101') }}" class="btn btn-sm btn-outline-danger rounded-pill">Read More</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
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
