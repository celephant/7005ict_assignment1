@extends ('layouts.master')

@section('title','Home')

@section('content')
    <h1>Home Page</h1>

    <!-- Form to Create New Post -->
    <h2>Create a New Post</h2>
    <form method="post">
        @csrf
        <label for="title">Title:</label>
        <input type="text" id="title" name="title" required><br>

        <label for="author">Author:</label>
        <input type="text" id="author" name="author" required><br>

        <label for="message">Message:</label>
        <input id="message" name="message" required><br>

        <input type="submit" value="Create Post">
    </form>

    <!-- List of Posts -->
    <h2>Posts</h2>
    <ul>
        @foreach($posts as $post)
            <li> <a href="http://s5316065.elf.ict.griffith.edu.au/7005ict/assingment/1/public/post/{{ $post -> id }}">{{ $post->title }}</a>
            <br> ---- {{ $post->author }} @ {{ $post->date }} </li>
        @endforeach
    </ul>
@endsection