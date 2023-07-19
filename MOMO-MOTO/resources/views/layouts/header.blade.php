<header class="div">
    <a href="/home" class="a_box_title_logo">
        <img src="/images/logo.png" class="logo" alt="">
        <h1>MOMO-MOTO</h1>
    </a>
    @if (auth()->check())
    <div class="div_flex">
        <div style="margin-right: 25px;position:relative;">
            <img src="/images/cart.svg" id="logo_cart" style="width: 80%;cursor:pointer">
            <div class="div_cart_quantity">
                <label id="cart_quantity">0</label>
            </div>
        </div>
        <div class="div_logo_navbar">
            <img src="/images/navigator.svg" id="logo_navbar" style="width:100%; cursor:pointer">
            <div class="div_navbar">
                <div class="btn_navbar" id="btn_page_home">Accueil</div>
                <div class="btn_navbar" id="btn_page_profile">Mon profil</div>
                <div class="btn_navbar" id="btn_page_cart">Mon panier</div>
                <div class="btn_navbar admin" id="btn_page_addproduct">Ajout d'un produit</div>
                <div class="btn_navbar" id='btn_logout'>Se déconnecter</div>
            </div>
        </div>
    </div>
    @endif
</header>