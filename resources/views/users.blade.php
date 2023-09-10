@extends ('layouts.master')

@section('title','User List')

@section('content')
<div id= "user list">
    <h2>User List</h2>
    <ul>
        @foreach($users as $user)
            <li>
                <a href="{{ url('/userposts/' . $user->author) }}">{{ $user->author }}</a>
            </li>
        @endforeach
    </ul>
</div>

@endsection