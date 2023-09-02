@extends ('layouts.master')

@section('title', $post->title)

@section('content')
    <h1>Post</h1>
    <h3>{{ $post->title }}</h3>

    <p>Author: {{ $post->author }}</p>
    <p>Date: {{ $post->date }}</p>
    <p>Message: {{ $post->message }}</p>
@endsection
