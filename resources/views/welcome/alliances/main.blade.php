
<div class="border rounded p-2">

    <x-card>
        @slot('header')
            <h3 class=" bg-green-100 mb-2 p-2 text-3xl font-bold text-neutral-800 dark:text-neutral-200">
                ALIANZAS EDUCATIVAS
            </h3>
        @endslot
        @include('welcome.alliances.items')
    </x-card>

    
</div>