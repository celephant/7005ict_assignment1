<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title','Assignment1')</title>
</head>

<body>
    <h1>Welcome to Assignment1</h1>

    <nav>
        <ul>
            <li><a href="/">Home</a></li>
            <li><a href="/create-post">Create Post</a></li>
            <li><a href="/example">example</a></li>
        </ul>
    </nav>
    @yield('content')
</body>
</html>
