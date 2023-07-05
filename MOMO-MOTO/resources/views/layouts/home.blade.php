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
        <div class="div_product" style="display:none; width: 85vw;height: 75vh;">
            <div class="div_flex">
                <img id="img_product" src="/images/moto.png" alt="image du produit">
                <div class="div_flex" style="flex-direction: column;">
                    <label id="mark_product"></label>
                    <br>
                    <label id="model_product"></label>
                </div>
            </div>
            <div>
                <label id="price_product"></label>
                <label id="milestone_product"></label>
                <label id="year_product"></label>
            </div>
            <p id="description_product"></p>
        </div>
        </div>
    </main>
</body>

</html>