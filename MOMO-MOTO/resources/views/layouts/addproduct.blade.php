<!DOCTYPE html>
@include('layouts.head')

<body class="">
    @include('layouts.header')
    <main>
        <div class="div_addproduct" style="width: 35vw;height: 60vh;">
            <form id="form_addproduct">
                <h1 class="title_div"> Ajouter un produit</h1>
                <input id="input_mark_addproduct" class="input_form_addproduct" type="text" placeholder="La marque" />
                <br>
                <input id="input_model_addproduct" class="input_form_addproduct" type="text" placeholder="le modèle" />
                <br>
                <input id="input_price_addproduct" class="input_form_addproduct" type="number" placeholder="Le prix" />
                <br>
                <input id="input_year_addproduct" class="input_form_addproduct" type="number" placeholder="L'année" />
                <br>
                <input id="input_milestone_addproduct" class="input_form_addproduct" type="number" placeholder="Le kilométrage" />
                <br>
                <div class="div_flex"> 
                   <input class="btn_form_addproduct" type="button" value="Ajouter">
                </div>
            </form>
        </div>
    </main>
</body>

</html>