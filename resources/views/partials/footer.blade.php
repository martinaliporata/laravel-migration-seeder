<footer>
    <section class="footer-up">
        <section class="content">
            <section>
                <nav class="footer-links">
                    <h2>
                        DC Comics
                    </h2>
                    <ul>
                        <li>
                            <a href="/dccomics">
                                @foreach ($navbarDcComics as $element)
                                    {{$element['name']}}
                                @endforeach
                            </a>
                        </li>
                    </ul>
                </nav>
                <nav class="footer-links">
                    <h2>
                        Shop
                    </h2>
                    <ul>
                        <li>
                            <a href="/shop">
                                @foreach ($navbarShop as $element)
                                    {{$element['name']}}
                                @endforeach
                            </a>
                        </li>
                    </ul>
                </nav>
            </section>
            <nav class="footer-links">
                <h2>
                    DC
                </h2>
                <ul>
                    <li>
                        <a href="/dc">
                            @foreach ($navbarDc as $element)
                                {{$element['name']}}
                            @endforeach
                        </a>
                    </li>
                </ul>
            </nav>
            <nav class="footer-links">
                <h2>
                    Sites
                </h2>
                <ul>
                    <li>
                        <a href="/sites">
                            @foreach ($navbarSites as $element)
                                {{$element['name']}}
                            @endforeach
                        </a>
                    </li>
                </ul>
            </nav>
        </section>
        <img src="{{Vite::asset('resources/img/dc-logo-bg.png')}}" alt="">
    </section>
    <section class="footer-down">
        <section class="button">
            <button>
                Sign-up now!
            </button>
        </section>
        <section class="socials">
            <h2>
                Follow us
            </h2>
            <img src="{{Vite::asset('resources/img/footer-facebook.png')}}" alt="">
            <img src="{{Vite::asset('resources/img/footer-twitter.png')}}" alt="">
            <img src="{{Vite::asset('resources/img/footer-youtube.png')}}" alt="">
            <img src="{{Vite::asset('resources/img/footer-pinterest.png')}}" alt="">
            <img src="{{Vite::asset('resources/img/footer-periscope.png')}}" alt="">
        </section>
    </section>
</footer>
