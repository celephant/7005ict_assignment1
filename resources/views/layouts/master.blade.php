<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title','Assignment1')</title>
    <!-- Bootstrap CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-light">

    <div class="container mt-5">
        <h1 class="text-center mb-4">Welcome to Assignment1</h1>

        <!-- Navigation Menu -->
        <nav class="navbar navbar-expand-lg navbar-light bg-primary mb-4">
            <a class="navbar-brand" href="{{url('/')}}">Home</a>
            <a class="navbar-brand" href="{{url('users')}}">Users</a>
            <a class="navbar-brand" href="/example">Example</a>
        </nav>

        <!-- Content Section -->
        <div class="bg-white p-4 rounded">
            @yield('content')
        </div>
    </div>

</body>
</html>

