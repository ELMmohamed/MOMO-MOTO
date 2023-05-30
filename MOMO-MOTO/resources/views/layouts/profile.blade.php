<!DOCTYPE html>
@include('layouts.head')

<body class="">
    @include('layouts.header')
    <main>
        <div class="div_info_profile" style="width:40vw;height:60vh">
            <h1 class="title_div"> Votre profil</h1>
            <div class="box_info_profile">
                <div>
                    <label>Votre nom:</label>
                    <label id="profile_name">erfer</label>
                </div>
                <br>
                <div>
                    <label>Votre email:</label>
                    <label id="profile_email">erfer</label>
                </div>
                <br>
                <div>
                    <label>Votre status:</label>
                    <label id="profile_admin">erfer</label>
                </div>
            </div>
        </div>
        <div class="div_form_profile" style="display:none;width:40vw;height:60vh">
            <form id="form_profile">

            </form>
        </div>
    </main>
</body>

</html>