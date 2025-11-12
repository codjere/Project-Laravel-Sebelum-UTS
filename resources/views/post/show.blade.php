@extends('layouts.app')

@section('content')
<h2 class="fw-bold text-center mb-4">{{ str_replace('-', ' ', ucfirst($slug)) }}</h2>

<p class="text-muted text-center">Written by: Admin EduFun | Posted: {{ date('d M Y') }}</p>

<div class="mt-4">
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse ut tincidunt leo, a varius ligula. 
    Curabitur non orci non erat gravida aliquam. Ut non odio et felis tincidunt blandit.</p>
    <p>In this lesson, you will learn about the key concepts of {{ str_replace('-', ' ', $slug) }} and 
    its applications in real-world IT systems.</p>
</div>
@endsection
