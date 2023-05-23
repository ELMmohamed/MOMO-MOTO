import jQuery from 'jquery';
window.$ = jQuery;

var user;
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
        if (user.admin == 0) {

        }
    },
    error: (e) => {
        console.log(e);
    }
})


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

$('body').on('click', '#logo_navbar', (e) => {
    $('.div_navbar').toggle();
})



