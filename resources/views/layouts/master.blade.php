<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
</head>
<body>
    <header>
        <ul>
        <nav class="nav_links">
        
        <li>
            <a href="home">
            Home
            </a></li>
        <li><a href="about">
            About
            </a></li>
        <li><a href="contact">Contact</a></li>
        </nav>
        </ul>
        
            </header>
    
    
    <div>
    @yield('content') 
    </div>
</body>
</html>