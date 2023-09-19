@extends ('layouts.master')

@section('title','Home')

@section('content')

    <div id="header">
        <h1>Home Page</h1>
    </div>
<br>
<br>

    <!-- Form to Create New Post -->
    <div id="create-post-section">
        <h2>Create a New Post</h2>
        <form action="{{ url('/create-post') }}" method="post">
            @csrf
            <label for="title">Title:</label>
            <input type="text" id="title" name="title" required><br>

            <label for="author">Author:</label>
            <input type="text" id="author" name="author" value="{{ Session::get('author') }}" required><br>

            <label for="message">Message:</label>
            <input id="message" name="message" required><br>

            <input type="submit" value="Create Post">
        </form>
    </div>

    <br>
    <br>
    <br>

    <!-- List of Posts -->
    <div id="list-posts-section">
    <h2>Posts</h2>
        <ul>
            @foreach($posts as $post)
                <li> 
                    
                    <a href="{{ url('/post/' .$post->id) }}"> {{ $post->title }} </a>-{{ $post->author }}@ {{$post->date}}
                    <br> --{{$post->like_count}} Likes {{$post->comments_count}} Comments
                    <br> <a href="{{ url('/edit/'.$post->id) }}"> Edit </a>
                    <form action="{{ url('/delete-post/' . $post->id) }}" method="post">
                        @csrf
                        <input type="submit" value="Delete">
                    </form>

                </li>
            @endforeach
        </ul>
    </div>



@endsection