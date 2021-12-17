
<header>
    <div class="nav">
        <div class="logo">
            <img src="{{asset('img/dc-logo.png')}}" alt="">
        </div>
        <ul>
            @foreach ($indexes as $index)
                <li>
                    <a href="#">
                        {{strtoupper($index)}}
                    </a>
                </li>
            @endforeach
        </ul>
        <div class="search">
            <input type="text" placeholder="Search">
            <img src="{{asset('img/search.svg')}}" alt="" class="">
        </div>


    </div>
</header>