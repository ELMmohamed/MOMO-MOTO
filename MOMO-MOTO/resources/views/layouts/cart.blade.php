<!DOCTYPE html>
@include('layouts.head')

<body class="">
    @include('layouts.header')
    <main>
        <div class="div_cart" style="width: 85vw;height: 75vh;">
            <h1>Votre panier</h1>
            <div class="box_cart">
                <div class="div_product_in_cart"></div>
                <div class="div_info_cart">
                    <div class="div_total_cart">
                        <h2>Total a payer:</h2>
                        <h2>0 € dont 20% de TVA</h2>
                    </div>
                    <div>
                         <input type="text" name="" class="input_adress_user" placeholder="adresse de livraison">
                    </div>
                    <button class="btn_validate_cart">Valider le panier</button>
                </div>
            </div>
        </div>
    </main>
</body>

</html>