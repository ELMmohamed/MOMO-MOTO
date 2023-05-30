<!DOCTYPE html>
@include('layouts.head')

<body>
    @include('layouts.header')
    <main>
        <div class="div_form_auth" style="height:60vh">
            <form method="POST" class="form_auth" action="{{ route('register') }}">
                <h1 class="title_dov">S'inscrire</h1>
                @csrf
                <div>
                    <input id="name" class="input_form_auth" type="text" name="name" placeholder="Nom" required />
                    <error :messages="$errors->get('name')" class="mt-2" />
                </div>
                <div>
                    <input id="email" class="input_form_auth" type="email" name="email" placeholder="Email" required  />
                    <error :messages="$errors->get('email')" class="mt-2" />
                </div>
                <div>
                    <input id="password" class="input_form_auth" type="password" name="password" placeholder="Mot de passe" required />
                    <error :messages="$errors->get('password')" class="mt-2" />
                </div>
                <div>
                    <input id="password_confirmation" class="input_form_auth" type="password" name="password_confirmation" placeholder="Confirmer le mot de passe" />
                    <error :messages="$errors->get('password_confirmation')" class="mt-2" />
                </div>
                <div>
                    <input id="admin" class="input_form_auth" type="text" name="admin" placeholder="Code administrateur"/>
                    <error :messages="$errors->get('admin')" class="mt-2" />
                </div>
                <div>
                    <input class="btn_form_auth" type="submit" value="S'inscrire">
                </div>
                <div>
                    <a class="link_form_auth" href="{{ route('login') }}">Se connecter</a>
                </div>
            </form>
        </div>
    </main>
</body>

</html>