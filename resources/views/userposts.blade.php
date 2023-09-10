@extends ('layouts.master')

@section('title', 'Posts by ' . $author)

@section('content')
    <h2>Posts by {{ $author }}</h2>
    <ul>
        @foreach($posts as $post)
            <li>
                <a href="{{ url('/post/' . $post->id) }}">{{ $post->title }}</a>
            </li>
        @endforeach
    </ul>
@endsection
