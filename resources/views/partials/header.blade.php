<header class="header">
    <nav class="navbar">
        <div class="navbar__logo-container">
            <img class="logo-nav"
                src="https://cdn.shortpixel.ai/client/q_lossy,ret_img/https://www.lamolisana.it/wp-content/uploads/2020/04/marchio-sito-test.png"
                alt="">
        </div>
        <ul>
            <li><a href="{{ route('home') }}"
                    class="link {{ url()->current() == route('home') ? 'visited' : 'noactive' }}">home</a></li>
            <li><a href="{{ route('prodotti') }}"
                    class="link  {{ url()->current() == route('prodotti') ? 'visited' : 'noactive' }}">prodotti</a></li>
            <li><a href="{{ route('contatti') }}"
                    class="link {{ url()->current() == route('contatti') ? 'visited' : 'noactive' }}">contatti</a></li>
        </ul>
    </nav>
</header>
