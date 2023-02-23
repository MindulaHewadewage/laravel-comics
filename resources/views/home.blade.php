<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    @vite('resources/js/app.js')
</head>
<body>
    <header>
        {{-- <section id="top-header">
            <div class="bg-primary">
                <div class="container">
                    <ul>
                        <li><a href="#">DC POWER VISA </a></li>
                        <li><a href="#">ADDITIONAL DC SITES</a></li>
                    </ul>
                </div>
            </div>
        </section> --}}
        <section section id="bottom-header">
        <div class="container">
            <div class="logo">
                <a href="#"><img src="{{asset('img/dc-logo.png')}}" alt="logo dc"></a>
            </div>
            <div class="menu">
                <li><a href="{{route('characters')}}">Characters</a></li>
                <li><a href="{{route('comics')}}">Comics</a></li>
                <li><a href="{{route('movies')}}">Movies</a></li>
                <li><a href="{{route('tv')}}">tv</a></li>
                <li><a href="{{route('games')}}">games</a></li>
                <li><a href="{{route('collectibles')}}">collectibles</a></li>
                <li><a href="{{route('videos')}}">videos</a></li>
                <li><a href="{{route('fans')}}">fans</a></li>
                <li><a href="{{route('news')}}">news</a></li>
                <li><a href="{{route('shop')}}">shop</a></li>
            </div>
            <div class="search">
                <input type="text" placeholder="search">
            </div>
        </div>
        </section >
    </header>
</body>
</html>