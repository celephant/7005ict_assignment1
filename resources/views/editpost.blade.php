@extends ('layouts.master')

@section('title','Edit Post')

@section('content')
    <h2>Edit Post</h2>

    <form action="{{ url('/post/' . $post->id) }}" method="post">
        @csrf
        <label for="title">Upatae New Title:</label>
        <input type="text" id="title" name="title" required><br>


        <label for="message">Upatae New Message:</label>
        <input id="message" name="message" required><br>

        <input type="submit" value="Edit Post">
    </form>

    <h2>Original Post:</h2>
        <h3>Title:{{ $post->title }}</h3>
        <p>Message: {{ $post->message }}</p>
        <p>Author: {{ $post->author }}</p>
        <p>Date: {{ $post->date }}</p>
    
@endsection
