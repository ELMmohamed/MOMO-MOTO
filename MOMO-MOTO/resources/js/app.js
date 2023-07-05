import jQuery from 'jquery';
window.$ = jQuery;

var user,
    url = location.pathname.slice(-1) == '/' ? location.pathname.slice(0, -1) : location.pathname,
    products;

console.log(url);

function init() {
    $.ajax({
        credentials: 'same-origin',
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        url: '/getuser',
        method: 'GET',
        success: (e) => {
            console.log(e);
            user = e;
            if (user.admin == 0)
                $(".admin").hide();
            if (url == '/profile')
                complete_profile(user);
        },
        error: (e) => {
            console.log(e);
        }
    })
    if (url == '/home') {
        $.ajax({
            credentials: 'same-origin',
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            url: '/getproducts',
            method: 'GET',
            success: (e) => {
                console.log(e);
                products = e;
                $.each(e, (key, val) => {
                    $(".box_products").append(
                        $('<div/>').attr({ "class": 'box_product', "id": "product_" + val.id }).append(
                            $('<img>').addClass('img_product').attr('src', "images/moto.png"),
                            $('<div/>').addClass('box_info_product').append($('<label>').addClass('label_info_product').html(val.mark + ' ' + val.model)),
                            $('<div/>').addClass('box_info_product').append($('<label>').addClass('span_info_product').html(val.price + ' €')),
                            $('<div/>').addClass('box_info_product').append($('<button>').addClass('btn_addcart_product').html("Ajouter au panier")),
                            $('<div/>').addClass('box_info_product').append($('<button>').addClass('btn_see_product').html('Voir la moto')),
                        )
                    )
                })
            },
            error: (e) => {
                console.log(e);
            }
        })
    }
}

if (url != '' && url != '/register')
    init();




$('body').on('click', '#btn_logout', (e) => {
    $.ajax({
        credentials: 'same-origin',
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        url: '/logout',
        method: 'POST',
        success: (e) => {
            console.log(e);
            location.reload();
        }

    })

})

function validateForm(form) {
    var inputs = $(form).find('input');
    var valid = true;
    inputs.each((i, e) => {
        if ($(e).val() == '')
            valid = false;
    })
    return valid;
}

function complete_profile(user) {
    $("#profile_name").html(user.name)
    $("#profile_email").html(user.email)
    $("#profile_phone").html(user.phone ? user.phone : 'Non renseigné')
    $("#profile_address").html(user.address ? user.address : 'Non renseigné')
    $("#profile_admin").html(user.admin == 1 ? 'Administrateur' : 'Client');
    $("#edit_name").val(user.name);
    $("#edit_email").val(user.email);
    $("#edit_phone").val(user.phone);
    $("#edit_address").val(user.address);
    $("#edit_password").val('');
    $("#edit_password_confirmation").val('');
}


$('body').on('click', '#logo_navbar', (e) => { $('.div_navbar').toggle(); })
$('body').on('click', '#btn_page_profile', (e) => { location.href = '/profile'; })
$('body').on('click', '#btn_page_home', (e) => { location.href = '/home'; })
$('body').on('click', '#btn_page_addproduct', (e) => { location.href = '/addproduct'; })
$('body').on('click', '.btn_show_edit_profile', (e) => { $(".div_info_profile").hide(); $(".div_edit_profile").show(); })
$('body').on('click', '#arrow_back', (e)=> { $(".div_home").show(); $(".div_product").hide(); })
$('body').on('click', '.input_img_form_addproduct', (e) => { $(e.currentTarget).val() })

$('body').on('click', '.btn_form_edit_profile', (e) => {

    if (!validateForm('#form_edit_profile')) {
        alert('Veuillez remplir tous les champs');
        return;
    }

    var profile = {
        name: $("#edit_name").val(),
        email: $("#edit_email").val(),
        phone: $("#edit_phone").val(),
        address: $("#edit_address").val(),
        password: $("#edit_password").val(),
        password_confirmation: $("#edit_password_confirmation").val()
    }
    console.log(profile);
    if (profile.password != profile.password_confirmation) {
        alert('Les mots de passe ne correspondent pas');
        return;
    }

    $.ajax({
        credentials: 'same-origin',
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        url: '/updateuser',
        method: 'POST',
        data: profile,
        success: (e) => {
            console.log(e);
            location.reload();
        },
        error: (e) => {
            console.log(e);
        }

    })
})

$('body').on('click', '.btn_form_addproduct', (e) => {

    if (!validateForm('#form_addproduct')) {
        alert('Veuillez remplir tous les champs');
        return;
    }

    var product = {
        mark: $("#input_mark_addproduct").val(),
        model: $("#input_model_addproduct").val(),
        price: $("#input_price_addproduct").val(),
        year: $("#input_year_addproduct").val(),
        milestone: $("#input_milestone_addproduct").val(),
        description: $("#input_description_addproduct").val(),
    }

    console.log(product);
    $.ajax({
        credentials: 'same-origin',
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        url: '/addproduct',
        method: 'POST',
        data: product,
        success: (e) => {
            console.log(e);
            location.href = '/home';
        },
        error: (e) => {
            console.log(e);
        }
    })
});

$('body').on('click', '.btn_see_product', (e) => {
    $(".div_home").hide();
    $(".div_product").show();

    var id = $(e.currentTarget).parent().parent().attr('id').split('_')[1];
    $.each(products, (key, val) => {
        if (val.id == id) {
            $("#mark_product").html("Marque: " + val.mark);
            $("#model_product").html("Modèle: " + val.model);
            $("#price_product").html("Prix: " + val.price + ' €');
            $("#year_product").html("Année: " + val.year);
            $("#milestone_product").html("Kilomètrage: " + val.milestone + ' km');
            $("#description_product").html("Description: " + val.description);
        }
    })

})

