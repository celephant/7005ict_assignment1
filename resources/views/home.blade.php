@extends ('layouts.master')

@section('title','Home')

@section('content')
    <ul>
        @foreach($posts as $post)
            <li>
                <a href="#">{{ $post->title }}</a> by {{ $post->author }}
            </li>
        @endforeach
    </ul>

@endsection