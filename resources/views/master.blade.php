<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="styles.css">
    <!-- Additional CSS or meta tags can be included here -->

   

</head>

<body>
    <header>
        <h1>My Website</h1>
        <nav>
            <ul>
                <li><a href="/home">Home</a></li>
                <li><a href="/profile">profile</a></li>
                <li><a href="/xyz">xyz</a></li>
            </ul>
        </nav>
    </header>

    <div>
        @yield('content')
    </div>

    <footer>
        <p>&copy; 2024 My Website</p>
    </footer>

    @stack('scripts')

</body>

</html>