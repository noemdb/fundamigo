<!-- component -->
<div class="bg-gray-100 flex justify-center h-screen">
    
    <!-- Left: Image -->
    {{-- <div class="w-1/2 h-screen hidden lg:block">
        <img src="{{asset('image/login/login.jpg')}}" alt="Placeholder Image" class="object-cover w-full h-full">
    </div> --}}

    <div class="w-1/2 h-screen hidden lg:block">

        <div class="relative w-full">
            <img src="{{asset('image/login/blue.png')}}" alt="Placeholder Image" class="object-cover w-full h-full">
            <div class="absolute inset-0 flex items-center justify-center px-2">
                <p class="text-white text-2xl font-bold bg-black bg-opacity-50 p-4 rounded-lg">
                    Inicia sesión y accede, personaliza tus preferencias y forma parte de nuestra comunidad. Aquí, tus ideas cuentan y tu experiencia se transforma.
                </p>
            </div>
        </div>

    </div>


    <!-- Right: Login Form -->
    <div class="lg:p-24 md:p-48 sm:20 p-8 w-full lg:w-1/2 bg-info-100">

        {{-- @include('auth.login') --}}
        

        <x-card padding="px-6 py-5 md:px-5">    
            
            @slot('header') <h1 class="text-2xl font-semibold mb-2 p-4 text-center">Inicio de Sesión</h1> @endslot

            <!-- Session Status -->
            <x-auth-session-status class="mb-4" :status="session('status')" />

            <form method="POST" action="{{ route('login') }}">
                @csrf

                <!-- Email Address -->
                <div>
                    <x-input-label for="email" :value="__('Correo Electrónico')" />
                    <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
                    <x-input-error :messages="$errors->get('email')" class="mt-2" />
                </div>

                <!-- Password -->
                <div class="mt-4">
                    <x-input-label for="password" :value="__('Contraseña')" />

                    <x-text-input id="password" class="block mt-1 w-full"
                                    type="password"
                                    name="password"
                                    required autocomplete="current-password" />

                    <x-input-error :messages="$errors->get('password')" class="mt-2" />
                </div>

                <!-- Remember Me -->
                <div class="block mt-4">
                    <label for="remember_me" class="inline-flex items-center">
                        <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500" name="remember">
                        <span class="ms-2 text-sm text-gray-600">{{ __('Recuerdame') }}</span>
                    </label>
                </div>

                <div class="flex items-center justify-end mt-4">
                    @if (Route::has('password.request'))
                        <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('password.request') }}">
                            {{ __('Ovidaste la contraseña?') }}
                        </a>
                    @endif

                    <x-primary-button class="ms-3">
                        {{ __('Iniciar') }}
                    </x-primary-button>
                </div>
            </form>

        </x-card>
    </div>
</div>