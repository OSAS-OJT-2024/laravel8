@extends('layouts.app')

@section('title','Blog Posts' )

@section('content')
{{-- @each('posts.partials.post', $posts, 'post', 'view.empty') --}}
@forelse ($posts as $key=> $post)
    @include('posts.partials.post')
@empty 
No posts found!
@endforelse

@endsection