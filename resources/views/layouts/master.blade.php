<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title','Assignment1')</title>
</head>

<body>
    <h1>Welcome to Assignment1</h1>

    <nav>
        
            <a href="{{url('/')}}">Home</a>
            <a href="/create-post">Create Post</a>
            <a href="/example">example</a>
        
    </nav>
    @yield('content')
</body>
</html>
