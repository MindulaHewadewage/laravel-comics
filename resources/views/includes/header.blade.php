<header class="container">

    <div class="logo">
        <a href="#"><img src="{{asset('img/dc-logo.png')}}" alt="logo dc"></a>
    </div>
    <div class="menu">
    <ul>
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
    </ul>
    </div>
    <div class="search">
        <input type="text" placeholder="search">
    </div>

</header>