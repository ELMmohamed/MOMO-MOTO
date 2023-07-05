<!DOCTYPE html>
@include('layouts.head')

<body class="">
    @include('layouts.header')
    <main>
        <div class="div_home" style="width: 85vw;height: 75vh;">
            <h1>Accueil</h1>
            <div class="box_products">
            </div>
        </div>
        <div class="div_product" style="display:none;position:relative; width: 85vw;height: 75vh;">
            <img src="/images/arrow_back.svg" id="arrow_back" alt="">
            <div class="div_flex">
                <img id="img_product" src="/images/moto.png" alt="image du produit">
                <div class="div_flex" style="flex-direction: column;">
                    <label id="mark_product" style="font-size: 2em;"></label>
                    <br>
                    <label id="model_product" style="font-size: 2em;"></label>
                </div>
            </div>
            <div class="div_flex" style="justify-content:space-between; width:60%; margin:5vh;">
                <label id="price_product"></label>
                <label id="milestone_product"></label>
                <label id="year_product"></label>
            </div>
            <p id="description_product"></p>
            <div class="div_flex">
                <input class="btn_addcart_product" type="button" value="Ajouter au panier">
            </div>
        </div>
        </div>
    </main>
</body>

</html>