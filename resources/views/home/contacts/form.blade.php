
<!-- Container for demo purpose -->
<div class="container my-2 mx-auto md:px-2">
    <!-- Section: Design Block -->

    <section class="mb-2">

        <div class="flex justify-center">
            <div class="text-center md:max-w-xl lg:max-w-3xl">
                <h2 class="mb-1 px-2 text-3xl font-bold">Tus datos</h2>
            </div>
        </div>

        <form>
            <div class="relative mb-6" data-te-input-wrapper-init>
                <div class="mb-4">
                    <label for="name" class="block text-gray-600">Nombre</label>
                    <input type="text" id="name_messenge" name="name"
                        class="w-full border border-gray-300 rounded-md py-2 px-3 focus:outline-none focus:border-blue-500"
                        autocomplete="off">
                </div>
            </div>
            <div class="relative mb-6" data-te-input-wrapper-init>
                <div class="mb-4">
                    <label for="email" class="block text-gray-600">Correo Electrónico</label>
                    <input type="text" id="email_messenge" name="email"
                        class="w-full border border-gray-300 rounded-md py-2 px-3 focus:outline-none focus:border-blue-500"
                        autocomplete="off">
                </div>
            </div>
            <div class="relative mb-6" data-te-input-wrapper-init>
                <div class="mb-4">
                    <label for="messenge" class="block text-gray-600">Mensaje</label>
                    <textarea type="text" id="messenge" name="messenge"
                        class="w-full border border-gray-300 rounded-md py-2 px-3 focus:outline-none focus:border-blue-500"
                        autocomplete="off"></textarea>
                </div>
            </div>
            {{-- <div class="relative mb-6" data-te-input-wrapper-init>
                <textarea
                    class="block text-gray-600"
                    id="exampleFormControlTextarea1" name="messenge" rows="3" placeholder="Your message"></textarea>
                <label for="exampleFormControlTextarea1"
                    class="pointer-events-none absolute left-3 top-0 mb-0 max-w-[90%] origin-[0_0] truncate pt-[0.37rem] leading-[1.6] text-neutral-500 transition-all duration-200 ease-out peer-focus:-translate-y-[0.9rem] peer-focus:scale-[0.8] peer-focus:text-primary peer-data-[twe-input-state-active]:-translate-y-[0.9rem] peer-data-[twe-input-state-active]:scale-[0.8] motion-reduce:transition-none dark:text-neutral-400 dark:peer-focus:text-primary">Example
                    textarea</label>
            </div> --}}

            <button type="button" data-te-ripple-init data-te-ripple-color="light"
                class="mb-6 inline-block w-full rounded bg-primary px-6 pt-2.5 pb-2 text-xs font-medium uppercase leading-normal text-white shadow-[0_4px_9px_-4px_#3b71ca] transition duration-150 ease-in-out hover:bg-primary-600 hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:bg-primary-600 focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:outline-none focus:ring-0 active:bg-primary-700 active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)]">
                Enviar
            </button>
        </form>        

    </section>
    <!-- Section: Design Block -->
</div>
<!-- Container for demo purpose -->

{{-- <div class="container my-2 mx-auto md:px-2">
    
<x-card>

    @slot('header') <h1 class="text-2xl font-semibold mb-2 p-4 text-center">Tus datos</h1> @endslot

    <form action="#" method="POST">
        <!-- Username Input -->
        <div class="mb-4">
            <label for="name" class="block text-gray-600">Nombre</label>
            <input type="text" id="name_messenge" name="name"
                class="w-full border border-gray-300 rounded-md py-2 px-3 focus:outline-none focus:border-blue-500"
                autocomplete="off">
        </div>
        <!-- email Input -->
        <div class="mb-4">
            <label for="email" class="block text-gray-600">Correo Electrónico</label>
            <input type="text" id="email_messenge" name="email"
                class="w-full border border-gray-300 rounded-md py-2 px-3 focus:outline-none focus:border-blue-500"
                autocomplete="off">
        </div>

        </div>
        <!-- email Input -->
        <div class="mb-4">
            <div class="relative mb-3" data-twe-input-wrapper-init>
                <textarea
                    class="peer block min-h-[auto] w-full rounded border-0 bg-transparent px-3 py-[0.32rem] leading-[1.6] outline-none transition-all duration-200 ease-linear focus:placeholder:opacity-100 peer-focus:text-primary data-[twe-input-state-active]:placeholder:opacity-100 motion-reduce:transition-none dark:text-white dark:placeholder:text-neutral-300 dark:peer-focus:text-primary [&:not([data-twe-input-placeholder-active])]:placeholder:opacity-0"
                    id="exampleFormControlTextarea1" name="messenge" rows="3" placeholder="Your message"></textarea>
                <label for="exampleFormControlTextarea1"
                    class="pointer-events-none absolute left-3 top-0 mb-0 max-w-[90%] origin-[0_0] truncate pt-[0.37rem] leading-[1.6] text-neutral-500 transition-all duration-200 ease-out peer-focus:-translate-y-[0.9rem] peer-focus:scale-[0.8] peer-focus:text-primary peer-data-[twe-input-state-active]:-translate-y-[0.9rem] peer-data-[twe-input-state-active]:scale-[0.8] motion-reduce:transition-none dark:text-neutral-400 dark:peer-focus:text-primary">Example
                    textarea</label>
            </div>
        </div>



        <!-- Login Button -->
        <button type="submit"
            class="bg-blue-500 hover:bg-blue-600 text-white font-semibold rounded-md py-2 px-4 w-full">Iniciar</button>
    </form>

</x-card>

</div> --}}