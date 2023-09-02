@extends ('layouts.master')

@section('title', $post->title)

@section('content')
    <h1>Post</h1>

    <h3>{{ $post->title }}</h3>

    <p>Author: {{ $post->author }}</p>
    <p>Date: {{ $post->date }}</p>
    <p>Message: {{ $post->message }}</p>

    <h2>Comments:</h2>
    <ul>
        @foreach($comments as $comment)
            <li> {{ $comments->message }}</a>
            <br> ---- {{ $comments->author }} @ {{ $comments->date }} </li>
        @endforeach
    </ul>
@endsection
