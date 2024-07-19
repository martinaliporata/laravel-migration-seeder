
<header>
    <section class="header-content">
        <section class="logo">
            <img src="{{Vite::asset('resources/img/dc-logo.png')}}" class="main-logo" alt="">
        </section>
        <section class="navbar">
            <nav>
                <ul>
                    <li class="{{Route::currentRouteName() === 'guest.products' ? 'active' : ''}}">
                        <a href="{{route ('guest.products')}}">
                            @foreach ($navbar as $element)
                                {{$element['name']}}
                            @endforeach
                        </a>
                    </li>
                </ul>
            </nav>
        </section>
    </section>
    <section class="jumbo">
        ciao
    </section>
</header>
