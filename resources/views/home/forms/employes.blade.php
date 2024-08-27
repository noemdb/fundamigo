<div class="container mx-auto max-w-lg">
    <h1 class="text-center text-2xl font-bold mb-4">Registro de empleado</h1>
    <form action="/register" method="post">
        <div class="mb-6">
            <label for="name" class="block mb-2 text-sm font-medium text-gray-900">Nombre
                completo</label>
            <input type="text" id="name" name="name"
                class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                required>
        </div>
        <div class="mb-6">
            <label for="email" class="block mb-2 text-sm font-medium text-gray-900">Correo
                electrónico</label>
            <input type="email" id="email" name="email"
                class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                required>
        </div>
        <div class="mb-6">
            <label for="password"
                class="block mb-2 text-sm font-medium text-gray-900">Contraseña</label>
            <input type="password" id="password" name="password"
                class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                required>
        </div>
        <div class="mb-6">
            <label for="phone" class="block mb-2 text-sm font-medium text-gray-900">Teléfono</label>
            <input type="tel" id="phone" name="phone"
                class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                required>
        </div>
        <div class="mb-6">
            <label for="skills" class="block mb-2 text-sm font-medium text-gray-900">Habilidades
                (separadas por comas)</label>
            <input type="text" id="skills" name="skills"
                class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                required>
        </div>
        <div class="mb-6">
            <label for="experience" class="block mb-2 text-sm font-medium text-gray-900">Años de
                experiencia</label>
            <input type="number" id="experience" name="experience"
                class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                required>
        </div>

        <div class=" mb-6">
            <label for="resume" class="block mb-2 text-sm font-medium text-gray-900">Subir CV
                (opcional)</label>
            <input type="file" id="resume" name="resume"
                class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
        </div>
        {{-- <button type="submit" class="btn-primary">Registrarse</button> --}}
        <button type="submit"
            class="inline-block w-full rounded bg-primary px-7 pb-2 pt-3 text-sm font-medium uppercase leading-normal text-white shadow-primary-3 transition duration-150 ease-in-out hover:bg-primary-accent-300 hover:shadow-primary-2 focus:bg-primary-accent-300 focus:shadow-primary-2 focus:outline-none focus:ring-0 active:bg-primary-600 active:shadow-primary-2"
            >
            Registrarse
        </button>

    </form>
</div>