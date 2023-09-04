@extends ('layouts.master')

@section('title', $post->title)

@section('content')
    <h2>Post</h2>

    <h3>{{ $post->title }}</h3>

    <p>Author: {{ $post->author }}</p>
    <p>Date: {{ $post->date }}</p>
    <p>Message: {{ $post->message }}</p>

    <h2>Comments:</h2>
    <ul>
        @foreach($comments as $comment)
            <li> {{ $comment->message }}</a>
            <br> ---- {{ $comment->author }} @ {{ $comment->date }} </li>
        @endforeach
    </ul>

    <!-- New Comment Form -->
    <h2>Add a Comment</h2>
    <form action="http://s5316065.elf.ict.griffith.edu.au/7005ict/assingment/1/public/post/{{ $post -> id }}" method="post">
        @csrf
        <label for="author">Author:</label>
        <input type="text" id="author" name="author" required><br>

        <label for="message">Message:</label>
        <input id="message" name="message" required></input><br>

        <input type="submit" value="Add Comment">
    </form>

@endsection
