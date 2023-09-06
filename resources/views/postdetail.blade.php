@extends ('layouts.master')

@section('title', $post->title)

@section('content')
<div id="post-details">
    <h2>Post</h2>

    <h3>{{ $post->title }}</h3>

    <p>Author: {{ $post->author }}</p>
    <p>Date: {{ $post->date }}</p>
    <p>Message: {{ $post->message }}</p>
</div>

<div id="comments">
    <h2>Comments:</h2>
    <ul>
        @foreach($comments as $comment)
            <li> {{ $comment->message }}</a>
            <br> ---- {{ $comment->author }} @ {{ $comment->date }} </li>
        @endforeach
    </ul>
</div>

    <!-- New Comment Form -->
<div id="add-comment">
    <h2>Add a Comment</h2>
    <form action="{{ url('/post/' . $post->id) }}" method="post">
        @csrf
        <label for="author">Author:</label>
        <input type="text" id="author" name="author" required><br>

        <label for="message">Message:</label>
        <input id="message" name="message" required></input><br>

        <input type="submit" value="Add Comment">
    </form>
</div>

@endsection
