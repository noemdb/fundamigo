
<div class="border rounded p-2">

    <x-card>
        @slot('header')
            <h3 class=" bg-blue-100 mb-2 mt-4 px-2 text-3xl font-bold text-neutral-800">
                Nuestro Equipo
            </h3>
        @endslot
        @include('home.authority.partials.teams')
        <hr>
        @include('home.authority.partials.workers')

    </x-card>

</div>