<!-- component -->
<div class="bg-gray-100 flex justify-center h-screen">
    <!-- Left: Image -->
    <div class="w-1/2 h-screen hidden lg:block">
        <img src="{{asset('image/login/register.png')}}" alt="Placeholder Image" class="object-cover w-full h-full">
    </div>
    <!-- Right: SingUp Form -->
    <div class="lg:p-24 md:p-48 sm:20 p-8 w-full lg:w-1/2 bg-success-100">

        <x-card padding="px-6 py-5 md:px-5">

            @slot('header') <h1 class="text-2xl font-semibold mb-2 p-4 text-center">Registro</h1> @endslot

            <div id="logo_register" class="w-full sm:max-w-md px-6 py-2 mb-2 bg-blue-200 shadow-md overflow-hidden sm:rounded-lg">
                <a href="/">
                    <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
                </a>
            </div>
        
            <form action="#" method="POST">
                <!-- Username Input -->
                <div class="mb-4">
                    <label for="username" class="block text-gray-600">Nombre del Uusuario</label>
                    <input type="text" id="username_signup" name="username"
                        class="w-full border border-gray-300 rounded-md py-2 px-3 focus:outline-none focus:border-blue-500"
                        autocomplete="off">
                </div>
                <!-- email Input -->
                <div class="mb-4">
                    <label for="email" class="block text-gray-600">Correo Electrónico</label>
                    <input type="text" id="email_signup" name="email"
                        class="w-full border border-gray-300 rounded-md py-2 px-3 focus:outline-none focus:border-blue-500"
                        autocomplete="off">
                </div>
                <!-- Password Input -->
                <div class="mb-4">
                    <label for="password" class="block text-gray-600">Contraseña</label>
                    <input type="password" id="password_signup" name="password"
                        class="w-full border border-gray-300 rounded-md py-2 px-3 focus:outline-none focus:border-blue-500"
                        autocomplete="off">
                </div>
                <!-- Login Button -->
                <button type="submit"
                    class="bg-blue-500 hover:bg-blue-600 text-white font-semibold rounded-md py-2 px-4 w-full">Registrate</button>
            </form>

        </x-card>

    </div>
</div>