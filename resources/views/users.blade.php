<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Usuarios') }}
        </h2>
    </x-slot>

    <div class="py-2">
        {{-- <div class="max-w-7xl mx-auto sm:px-6 lg:px-8"> --}}
        <div class="mx-2">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    @include('users.index')
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
