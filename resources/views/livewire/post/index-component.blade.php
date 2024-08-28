<div>

    <div class="flex justify-end">
        <x-button right-icon="plus" info label="Nuevo" wire:click="setModeCreate()"/>
    </div>

    @includeWhen($modeCreate, 'livewire.post.partials.create')    
    @includeWhen($modeCreate, 'livewire.post.partials.edit')    

    @include('livewire.post.table.index')
    
</div>

