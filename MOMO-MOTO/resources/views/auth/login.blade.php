<!DOCTYPE html>
@include('layouts.head')

<body>
    @include('layouts.header')
    <main>
        <div class="div_form_auth">
            <form class="form_auth" method="POST" action="{{ route('auth') }}">
                <h1 class="title_div">Se connecter</h1>
                @csrf
                <div>
                    <input id="email" class="input_form_auth" type="email" name="email" placeholder="Email" required />
                    <error :messages="$errors->get('email')" class="mt-2" />
                </div>
                <div class="mt-4">
                    <input id="password" class="input_form_auth" type="password" name="password" placeholder="Mot de passe" required />
                    <error :messages="$errors->get('password')" class="mt-2" />
                </div>
                <div>
                    <input class="btn_form_auth" type="submit" value="Se connecter">
                </div>
                <div>
                    <a class="link_form_auth" href="{{ route('register') }}">S'inscrire</a>
                </div>
            </form>
        </div>
    </main>
</body>

</html>