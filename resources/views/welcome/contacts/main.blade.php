<x-card title="CONTACTO">

    @slot('header')
        <h3 class="bg-indigo-200 mb-4 mt-6 p-2 text-3xl font-bold text-neutral-800 dark:text-neutral-200">
            Contáctanos
        </h3>
    @endslot

    <div class="grid grid-cols-12 gap-x-4">

        <!-- Column -->
        <div class="col-span-12 md:col-span-6 xl:col-span-6">
            <section id="contact" class="bg-gray-100 py-0 border rounded shadow">
                @include('welcome.contacts.form')
            </section>
        </div>

        <!-- Column -->
        <div class="col-span-12 md:col-span-6 xl:col-span-6 border rounded shadow bg-gray-200">

            <x-card title="Localízanos">
                @slot('header')
                    <h3 class="text-2xl font-semibold text-center mb-0">
                        Localízanos
                    </h3>
                @endslot
                <iframe class="w-full aspect-square border-spacing-2 rounded shadow"
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3924.8561340803612!2d-68.74191124972349!3d10.353386292573173!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e80cf4083bc5c85%3A0x668a89fe22d58027!2sColegio%20Fray%20Luis%20Amig%C3%B3!5e0!3m2!1ses!2sve!4v1600200177193!5m2!1ses!2sve"
                frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
            </x-card>            
            
        </div>

    </div>

    @include('welcome.contacts.comunications')

</x-card>