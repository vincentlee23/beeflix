<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{asset('css/navbar.css')}}">
    <link rel="icon" href="{{asset('assets/bee2.png')}}">
</head>
<body>
    <header>
        <h1>BeeFlix</h1>
        <img src="{{asset('assets/bee2.png')}}" alt="" id="beelogo">
    </header>
    <nav>
        <div class="nav1">
            @yield('back-btn')
        </div>
        <div class="nav2">
            <a href="/home">LIHAT SEMUA FILM</a>
        </div>
    </nav>
    <br><br>
    
    @yield('content')

    <footer>
        2022 &copy; All Rights Reserved Beeflix Inc.
    </footer>

</body>
</html>