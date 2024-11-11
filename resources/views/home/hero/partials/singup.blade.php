<!-- component -->
<div class="flex justify-center">
    
    <!-- Right: Login Form -->
    <div class="w-full">        

        <x-card padding="px-6 py-5 md:px-5" cardClasses="backdrop-blur-sm bg-white/30">    
            
            @slot('header') <h1 class="text-2xl font-semibold mb-2 p-4 text-center">Registro de Usuario</h1> @endslot

            <!-- Session Status -->
            <x-auth-session-status class="mb-4" :status="session('status')" />

            <form method="POST" action="{{ route('register') }}">
                @csrf
        
                <!-- Name -->
                <div>
                    <x-input-label for="name" :value="__('Nombre de Usuario')" />
                    <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
                    <x-input-error :messages="$errors->get('name')" class="mt-2" />
                </div>
        
                <!-- Email Address -->
                <div class="mt-4">
                    <x-input-label for="hero_sing_up_email" :value="__('Correo Electrónico')" />
                    <x-text-input id="hero_sing_up_email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="username" />
                    <x-input-error :messages="$errors->get('email')" class="mt-2" />
                </div>
        
                <!-- Password -->
                <div class="mt-4">
                    <x-input-label for="hero_sing_up_password" :value="__('Contraseña')" />
        
                    <x-text-input id="hero_sing_up_password" class="block mt-1 w-full"
                                    type="password"
                                    name="password"
                                    required autocomplete="new-password" />
        
                    <x-input-error :messages="$errors->get('password')" class="mt-2" />
                </div>
        
                <!-- Confirm Password -->
                <div class="mt-4">
                    <x-input-label for="hero_sing_up_password_confirmation" :value="__('Confirmar Contraseña')" />
        
                    <x-text-input id="hero_sing_up_password_confirmation" class="block mt-1 w-full"
                                    type="password"
                                    name="password_confirmation" required autocomplete="new-password" />
        
                    <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                </div>
        
                <div class="flex items-center justify-end mt-4">
                    <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('login') }}">
                        {{ __('Permanecer registrado?') }}
                    </a>
        
                    <x-primary-button class="ms-4">
                        {{ __('Registrar') }}
                    </x-primary-button>
                </div>
            </form>

        </x-card>
    </div>
</div>
