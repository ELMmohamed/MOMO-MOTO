<header class="div">
    <div>
        <a href="/home">
            <img src="/images/logo.png" class="logo" alt="">
            <h1>MOMO-MOTO</h1>
        </a>
    </div>
    @if (auth()->check())
        <div>
            <button id='btn_logout'>Se déconnecter</button>
        </div>
    @endif
</header>