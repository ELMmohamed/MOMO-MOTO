import jQuery from 'jquery';
import { validate } from 'node-forge/lib/asn1';
window.$ = jQuery;

var user;

if (location.pathname != '/login'&& location.pathname != '/register') {
    init();
}

init = () => {
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
                $(".admin").hide();
            }
        },
        error: (e) => {
            console.log(e);
        }
    })
    if (location.pathname == '/profile') {
       $(".box_info_profile").add(
            $("#profile_name").text(user.name),
            $("#profile_email").text(user.email),
            
       )
    }
}

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

$('body').on('click', '#logo_navbar', (e) => { $('.div_navbar').toggle(); })
$('body').on('click', '#btn_page_profile', (e) => { location.href = '/profile'; })


