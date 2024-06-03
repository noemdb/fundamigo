<x-card title="Redes Sociales">
    @slot('header')
        <h3 class=" bg-green-100 mb-4 mt-6 p-2 text-3xl font-bold text-neutral-800 dark:text-neutral-200">
            Redes Sociales
        </h3>
    @endslot
    <div class="flex justify-between">
        @include('welcome.socials.items')
    </div>
</x-card>