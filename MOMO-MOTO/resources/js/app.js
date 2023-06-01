import jQuery from 'jquery';
window.$ = jQuery;

var user;

console.log(location.pathname);

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

if (location.pathname != '/login' && location.pathname != '/register') {
    init();
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


