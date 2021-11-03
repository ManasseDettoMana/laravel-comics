<header>
    <div class="container flex-center">
        <figure class="flex-center">
            <img src="{{asset('images/dc-logo.png')}}" alt="">
        </figure>
        <ul class="flex-center">
            @foreach($links as $link)
                <li class="{{ request()->routeIs($link['route']) ? 'active' : ''}}"><a href="{{$link['route']}}" >{{$link['text']}}</a></li>
            @endforeach
        </ul>

    </div>
</header>