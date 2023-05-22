<!DOCTYPE html>
    @include('layouts.head')
    <body>
        @include('layouts.header')
        <main>
            <form method="POST" action="{{ route('register') }}">
                @csrf
                <!-- Name -->
                <div class="">
                    <label for="name" :value="__('Name')" />
                    <input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
                    <error :messages="$errors->get('name')" class="mt-2" />
                </div>

                <!-- Email Address -->
                <div class="mt-4">
                    <label for="email" :value="__('Email')" />
                    <input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="username" />
                    <error :messages="$errors->get('email')" class="mt-2" />
                </div>

                <!-- Password -->
                <div class="mt-4">
                    <label for="password" :value="__('Password')" />

                    <input id="password" class="block mt-1 w-full" type="password" name="password"
                                    required autocomplete="new-password" />

                    <error :messages="$errors->get('password')" class="mt-2" />
                </div>

                <!-- Confirm Password -->
                <div class="mt-4">
                    <label for="password_confirmation" :value="__('Confirm Password')" />
                    <input id="password_confirmation" class="block mt-1 w-full" type="password"
                                    name="password_confirmation" required autocomplete="new-password" />
                    <error :messages="$errors->get('password_confirmation')" class="mt-2" />
                </div>
                
                <input type="submit" placeholder="S'inscrire">
            </form>
        </main>
    </body>
</html>