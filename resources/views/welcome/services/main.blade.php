<x-card>
    
    @slot('header')
        <h3 class=" bg-green-100 mb-2 mt-6 px-2 text-3xl font-bold text-neutral-800 dark:text-neutral-200">
            Servicios
        </h3>
    @endslot

    @include('welcome.services.items')
    
</x-card>