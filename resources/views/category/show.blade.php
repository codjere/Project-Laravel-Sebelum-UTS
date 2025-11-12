@extends('layouts.app')

@section('content')
<h2 class="fw-bold text-center mb-4">{{ ucfirst($slug) }}</h2>

@if($slug == 'data-science')
    <ul class="list-group">
        <li class="list-group-item">Machine Learning</li>
        <li class="list-group-item">Deep Learning</li>
        <li class="list-group-item">Data Visualization</li>
    </ul>
@elseif($slug == 'network-security')
    <ul class="list-group">
        <li class="list-group-item">Firewalls and VPN</li>
        <li class="list-group-item">Penetration Testing</li>
        <li class="list-group-item">Cryptography</li>
    </ul>
@else
    <p class="text-center text-muted">Category not found.</p>
@endif
@endsection
