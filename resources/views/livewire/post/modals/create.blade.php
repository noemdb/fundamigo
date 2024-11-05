<x-modal wire:model.defer="modeCreate" blur max-width="sm">
    <x-card title="Crear post ...">

        <livewire:post.create  />
        {{-- post.create --}}

    </x-card>
</x-modal>