<x-card>
    
    @slot('header')
        <h3 class="flex items-center gap-2 bg-indigo-200 mt-2 p-2 text-xl font-bold text-neutral-800">
            <x-icon name="document-text" class="w-12 h-12" /> 
            Nuestras mas recientes historias
        </h3>
    @endslot

    <div class="text-sm p-2">
        @include('home.posts.partials.items')
    </div>

    {{-- <div class="flex justify-end">
        <x-button primary label="Ver más" />
    </div> --}}
    
</x-card>