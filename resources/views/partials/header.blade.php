<header>
    <div class="container">
        <div class="row">
            <figure class="col-4 ">
                <a href="#">
                    <img src="{{asset('images/dc-logo.png')}}" alt="">
                </a>
            </figure>
            <div class="col-8 " id="header_col_links">
                <nav class="">
                    <ul class="d-flex">
                        @foreach($links as $link)
                            <li class="{{ request()->routeIs($link['route']) ? 'active' : ''}}"><a href="{{$link['route']}}" >{{$link['text']}}</a></li>
                        @endforeach
                    </ul>
                </nav>
            </div>
        </div>
    </div>
    <div id="header_jumbo">
       
    </div>
</header>