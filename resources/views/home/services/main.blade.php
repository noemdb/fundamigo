<x-card>
    
    @slot('header')
        <h3 class=" bg-green-100 mb-2 mt-6 px-2 text-3xl font-bold text-neutral-800">
            Servicios
        </h3>
    @endslot

    @include('home.services.items')
    
</x-card>