@extends('layouts.app')

@section('content')
<h2 class="fw-bold mb-4 text-center">Category</h2>

<div class="row justify-content-center">
    <div class="col-md-5 mb-3">
        <div class="card text-center shadow-sm">
            <div class="card-body">
                <h5 class="card-title">Data Science</h5>
                <p class="card-text">Explore AI, Machine Learning, and Big Data fundamentals.</p>
                <a href="{{ url('/category/data-science') }}" class="btn btn-primary">View Materials</a>
            </div>
        </div>
    </div>
    <div class="col-md-5 mb-3">
        <div class="card text-center shadow-sm">
            <div class="card-body">
                <h5 class="card-title">Network Security</h5>
                <p class="card-text">Learn how to protect and secure computer networks effectively.</p>
                <a href="{{ url('/category/network-security') }}" class="btn btn-primary">View Materials</a>
            </div>
        </div>
    </div>
</div>
@endsection
