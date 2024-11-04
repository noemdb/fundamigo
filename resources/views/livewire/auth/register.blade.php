<!-- component -->
<div class="bg-gray-100 flex justify-center h-screen">
    <!-- Left: Image -->
    <div class="w-1/2 h-screen hidden lg:block">
        {{-- <img src="{{asset('image/login/register.jpg')}}" alt="Placeholder Image" class="object-cover w-full h-full"> --}}

        <div class="relative w-full">
            <img src="{{asset('image/login/green.png')}}" alt="Placeholder Image" class="object-cover w-full h-full">
            <div class="absolute inset-0 flex items-center justify-center px-2">
                <p class="text-white text-2xl font-bold bg-black bg-opacity-50 p-4 rounded-lg">
                    Accede a nuestro contenido y personaliza tu experiencia. Únete a nuestra comunidad para recibir nuestra. No te pierdas la oportunidad de formar parte de algo especial. ¡Regístrate hoy mismo y comienza a explorar!
                </p>
            </div>
        </div>

    </div>

    <!-- Right: SingUp Form -->
    <div class="lg:p-24 md:p-48 sm:20 p-8 w-full lg:w-1/2 bg-success-100">

        <x-card padding="px-6 py-5 md:px-5">

            @slot('header') <h1 class="text-2xl font-semibold mb-2 p-4 text-center">Registro</h1> @endslot
            
        
            <form wire:submit.prevent="register">
                <!-- name Input -->
                <div class="mb-4">
                    <label for="name" class="block text-gray-600">Nombre del Uusuario</label>
                    <input type="text" id="name_signup" name="name"
                        class="w-full border border-gray-300 rounded-md py-2 px-3 focus:outline-none focus:border-blue-500"
                        autocomplete="off" wire:model="name">
                    @error('name') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
                </div>
                <!-- email Input -->
                <div class="mb-4">
                    <label for="email" class="block text-gray-600">Correo Electrónico</label>
                    <input type="text" id="email_signup" name="email"
                        class="w-full border border-gray-300 rounded-md py-2 px-3 focus:outline-none focus:border-blue-500"
                        autocomplete="off" wire:model="email">
                    @error('email') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
                </div>
                <!-- Password Input -->
                <div class="mb-4">
                    <label for="password" class="block text-gray-600">Contraseña</label>
                    <input type="password" id="password_signup" name="password"
                        class="w-full border border-gray-300 rounded-md py-2 px-3 focus:outline-none focus:border-blue-500"
                        autocomplete="off" wire:model="password">
                    @error('password') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
                </div>

                <div class="mb-6">
                    <label class="block text-gray-600" for="password_confirmation">Confirmar Contraseña</label>
                    <input type="password" id="password_confirmation" wire:model="password_confirmation" class="w-full border border-gray-300 rounded-md py-2 px-3 focus:outline-none focus:border-blue-500" placeholder="Confirma tu contraseña">
                </div>

                <x-primary-button class="ms-3 w-full" type="submit">
                    {{ __('Registrate') }}
                </x-primary-button>
            </form>

        </x-card>

    </div>
</div>