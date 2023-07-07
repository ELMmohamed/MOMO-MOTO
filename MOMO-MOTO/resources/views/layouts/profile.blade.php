<!DOCTYPE html>
@include('layouts.head')

<body class="">
    @include('layouts.header')
    <main>
        <div class="div_info_profile" style="width:40vw;height:60vh">
            <div class="box_info_profile">
                <h1 class="title_div"> Votre profil</h1>

                <div>
                    <label>Votre nom:</label>
                    <label id="profile_name"></label>
                </div>
                <br>
                <div>
                    <label>Votre email:</label>
                    <label id="profile_email"></label>
                </div>
                <br>
                <div>
                    <label>Votre adresse:</label>
                    <label id="profile_address"></label>
                </div>
                <br>
                <div>
                    <label>Votre téléphone:</label>
                    <label id="profile_phone"></label>
                </div>
                <br>
                <div>
                    <label>Votre status:</label>
                    <label id="profile_admin"></label>
                </div>
                <div class="div_flex" style="margin-top: 25px">
                    <input class="btn_show_edit_profile" type="button" value="Modifier le profil">
                    <input class="btn_delete_profile" style="background-color: red" type="button" value="Supprimer le compte">
                </div>
            </div>
        </div>
        <div class="div_edit_profile" style="display:none;width:40vw;height:70vh">
            <form id="form_edit_profile">
                <h1 class="title_div"> Modifiez votre profil</h1>
                <input id="edit_name" class="input_form_edit_profile" type="text" placeholder="Votre nom" />
                <br>
                <input id="edit_email" class="input_form_edit_profile" type="email" placeholder="Votre email" />
                <br>
                <input id="edit_address" class="input_form_edit_profile" type="text" placeholder="Votre adresse" />
                <br>
                <input id="edit_phone" class="input_form_edit_profile" type="tel" placeholder="Votre téléphone" />
                <br>
                <input id="edit_password" class="input_form_edit_profile" type="password" placeholder="Votre mot de passe" />
                <br>
                <input id="edit_password_confirmation" class="input_form_edit_profile" type="password" placeholder="Confirmer le mot de passe" />
                <br>
                <div class="div_flex"> 
                   <input class="btn_form_edit_profile" type="button" value="Modifier">
                </div>
            </form>
        </div>
    </main>
</body>

</html>