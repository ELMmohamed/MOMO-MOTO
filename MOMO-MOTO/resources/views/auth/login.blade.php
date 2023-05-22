<!DOCTYPE html>
    @include('layouts.head')
    <body>
        @include('layouts.header')
        <main>
            <form method="POST" action="{{ route('auth') }}">
                @csrf
                <!-- Email Address -->
                <div>
                    <label for="email" :value="__('Email')" />
                    <input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
                    <error :messages="$errors->get('email')" class="mt-2" />
                </div>

                <!-- Password -->
                <div class="mt-4">
                    <label for="password" :value="__('Password')" />

                    <input id="password" class="block mt-1 w-full"
                                    type="password"
                                    name="password"
                                    required autocomplete="current-password" />

                    <error :messages="$errors->get('password')" class="mt-2" />
                </div> 
                <div>
                    <input type="submit" placeholder="Se connecter">
                    </div>         
            </form>
        </main>
    </body>

</html>