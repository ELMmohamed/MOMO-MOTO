import jQuery from 'jquery';
window.$ = jQuery;


$('body').on('click', '#btn_logout', function(e) {
    console.log('logout');
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

