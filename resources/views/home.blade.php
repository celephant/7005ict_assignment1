@extends ('layouts.master')

@section('title','Home')

@section('content')
    <h1>Welcome to Assignment1</h1>
    <ul>
        @foreach($posts as $post)
            <li>
                <a href="#">{{ $post->title }}</a> by {{ $post->author }}
            </li>
        @endforeach
    </ul>

@endsection