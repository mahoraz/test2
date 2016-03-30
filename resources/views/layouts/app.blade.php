<!-- resources/views/layouts/app.blade.php -->

<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Laravel Quickstart - Basic</title>
        <link rel="stylesheet" href=" {{ asset('css/styles.css') }}">
        <!-- CSS And JavaScript -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
    </head>

    <body>
        <div class="container">
            <nav class="navbar navbar-default">
                <!-- Navbar Contents -->
                <a href="{{ url('') }}">Home</a>
                <a href="{{ url('about') }}">About</a>
            </nav>
             @yield('content')
        </div>

    </body>
</html>