<x-card>
    
    @slot('header')
        <h3 class=" bg-green-100 mb-4 mt-6 p-2 text-3xl font-bold text-neutral-800 dark:text-neutral-200">
            Experiencias
        </h3>
    @endslot

    <div class="mx-auto text-center md:max-w-xl lg:max-w-3xl">
        
        <h3 class="mb-2 text-3xl font-bold text-neutral-800 dark:text-neutral-200">
            Testimonios
        </h3>

        <p class="mb-2 pb-2 md:mb-2 md:pb-0">
            Le invitamos a conocer lo que nuestros miembros tienen que decir!
        </p>

    </div>
    
    @include('welcome.testimonials.partials.items')

</x-card>