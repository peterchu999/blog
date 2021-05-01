@extends('layouts.app')

@section('content')
<div class="container mt-8">
    <h1 class="font-mono text-7xl subpixel-antialiased">Choose Your Blog</h1>
    @livewire('post.posts-component')
</div>
@endsection