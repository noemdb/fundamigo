<div>

    <div class="flex justify-end">
        <x-button right-icon="plus" info label="Nuevo" wire:click="setModeCreate()"/>
    </div>

    @includeWhen($modeCreate, 'livewire.post.partials.create')

    @include('livewire.post.table.index')
    
</div>

