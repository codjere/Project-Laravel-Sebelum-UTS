@extends('layouts.app')

@section('content')
<div class="text-center mb-5">
    <h1 class="fw-bold">Welcome to EduFun</h1>
    <p class="text-muted">Free Learning Platform for IT Students</p>
</div>

<div class="row">
    <div class="col-md-6">
        <div class="card mb-4 shadow-sm">
            <img src="https://picsum.photos/600/300" class="card-img-top" alt="Machine Learning">
            <div class="card-body">
                <h5 class="card-title">Machine Learning Basics</h5>
                <p class="card-text">Learn the core algorithms that drive AI and data prediction systems.</p>
                <a href="{{ url('/post/machine-learning-basics') }}" class="btn btn-primary">Read More</a>
            </div>
        </div>
    </div>
    <div class="col-md-6">
        <div class="card mb-4 shadow-sm">
            <img src="https://picsum.photos/601/300" class="card-img-top" alt="Cybersecurity">
            <div class="card-body">
                <h5 class="card-title">Cybersecurity 101</h5>
                <p class="card-text">Understand the key concepts behind protecting systems and networks.</p>
                <a href="{{ url('/post/cybersecurity-101') }}" class="btn btn-primary">Read More</a>
            </div>
        </div>
    </div>
</div>
@endsection
