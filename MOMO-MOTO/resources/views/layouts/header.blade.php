<header class="div">
        <a href="/home" class="a_box_title_logo">
            <img src="/images/logo.png" class="logo" alt="">
            <h1>MOMO-MOTO</h1>
        </a>
    @if (auth()->check())
        <div class="div_logo_navbar">
            <img src="/images/icon_menu.png" id="logo_navbar" style="width:100%" alt="">
            <div class="div_navbar">
                <div class="btn_navbar" id='btn_logout'>Se déconnecter</div>
            </div>
        </div>
    @endif
</header>