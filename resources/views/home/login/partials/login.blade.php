<!-- component -->
<div class="bg-gray-100 flex justify-center h-screen">
    <!-- Left: Image -->
    <div class="w-1/2 h-screen hidden lg:block">
        <img src="{{asset('image/login/default.png')}}" alt="Placeholder Image" class="object-cover w-full h-full">
    </div>
    <!-- Right: Login Form -->
    <div class="lg:p-24 md:p-48 sm:20 p-8 w-full lg:w-1/2 bg-info-100">
        <x-card padding="px-6 py-5 md:px-5">

            @slot('header') <h1 class="text-2xl font-semibold mb-2 p-4 text-center">Inicio de Sesión</h1> @endslot
        
            <form action="#" method="POST">
                <!-- Username Input -->
                <div class="mb-4">
                    <label for="username" class="block text-gray-600">Nombre de Uusuario</label>
                    <input type="text" id="username_login" name="username"
                        class="w-full border border-gray-300 rounded-md py-2 px-3 focus:outline-none focus:border-blue-500"
                        autocomplete="off">
                </div>
                <!-- Password Input -->
                <div class="mb-4">
                    <label for="password" class="block text-gray-600">Contraseña</label>
                    <input type="password" id="password_login" name="password"
                        class="w-full border border-gray-300 rounded-md py-2 px-3 focus:outline-none focus:border-blue-500"
                        autocomplete="off">
                </div>
                <!-- Remember Me Checkbox -->
                <div class="mb-4 flex items-center">
                    <input type="checkbox" id="remember_login" name="remember" class="text-blue-500">
                    <label for="remember" class="text-gray-600 ml-2">Recuerdame</label>
                </div>
                <!-- Forgot Password Link -->
                <div class="mb-6 text-blue-500">
                    <a href="#" class="hover:underline">Ovildó su contraseña'?</a>
                </div>
                <!-- Login Button -->
                <button type="submit"
                    class="bg-blue-500 hover:bg-blue-600 text-white font-semibold rounded-md py-2 px-4 w-full">Iniciar</button>
            </form>

        </x-card>
    </div>
</div>