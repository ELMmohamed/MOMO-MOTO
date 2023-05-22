import jQuery from 'jquery';
window.$ = jQuery;


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

