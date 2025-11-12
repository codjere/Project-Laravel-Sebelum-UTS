@extends('layouts.app')

@section('content')
<div class="writers-container py-5">
    <div class="container">
        
        <div class="text-center mb-5">
            <h2 class="fw-bold display-4 mb-2">Our Expert Writers</h2>
            <p class="text-muted fs-5">Passionate educators crafting quality content</p>
            <div class="divider mx-auto" style="width: 60px; height: 3px; background: linear-gradient(90deg, #667eea 0%, #764ba2 100%);"></div>
        </div>

        
        <div class="row g-4">
           
            <div class="col-md-6 col-lg-4">
                <div class="card h-100 border-0 overflow-hidden transition-all" style="box-shadow: 0 8px 32px rgba(0,0,0,0.1); transition: all 0.3s ease;">
                    <div class="card-header bg-gradient" style="background: linear-gradient(135deg, #667eea 0%, #764ba2 100%); height: 120px;"></div>
                    <div class="card-body text-center pt-0">
                        <div class="avatar mx-auto mb-3" style="width: 80px; height: 80px; margin-top: -40px; background: linear-gradient(135deg, #667eea 0%, #764ba2 100%); border-radius: 50%; display: flex; align-items: center; justify-content: center; color: white; font-size: 2rem; font-weight: bold;">MD</div>
                        <h5 class="card-title fw-bold mb-2">Michele Dewantoro</h5>
                        <p class="text-primary fw-semibold mb-2">Data Science & AI Specialist</p>
                        <p class="card-text text-muted small mb-3">Expert in machine learning, data visualization, and AI education for the modern era.</p>
                        <button class="btn btn-sm btn-outline-primary rounded-pill">View Profile</button>
                    </div>
                </div>
            </div>

            <!-- Writer Card 2 -->
            <div class="col-md-6 col-lg-4">
                <div class="card h-100 border-0 overflow-hidden transition-all" style="box-shadow: 0 8px 32px rgba(0,0,0,0.1); transition: all 0.3s ease;">
                    <div class="card-header bg-gradient" style="background: linear-gradient(135deg, #f093fb 0%, #f5576c 100%); height: 120px;"></div>
                    <div class="card-body text-center pt-0">
                        <div class="avatar mx-auto mb-3" style="width: 80px; height: 80px; margin-top: -40px; background: linear-gradient(135deg, #f093fb 0%, #f5576c 100%); border-radius: 50%; display: flex; align-items: center; justify-content: center; color: white; font-size: 2rem; font-weight: bold;">JP</div>
                        <h5 class="card-title fw-bold mb-2">Jeremiah Paul</h5>
                        <p class="text-danger fw-semibold mb-2">Security & Hacking Expert</p>
                        <p class="card-text text-muted small mb-3">Specializing in network security, penetration testing, and ethical hacking practices.</p>
                        <button class="btn btn-sm btn-outline-danger rounded-pill">View Profile</button>
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
