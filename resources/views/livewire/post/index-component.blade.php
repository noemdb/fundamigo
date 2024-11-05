<div>

    <div class="flex justify-end">
        <x-button right-icon="plus" primary wire:click="setModeCreate()"/>
    </div>

    @includeWhen($modeCreate, 'livewire.post.modals.create')
    @includeWhen($modeEdit, 'livewire.post.modals.edit')
    {{-- livewire.post.modals.create.blade.php --}}

    @include('livewire.post.table.index')
    
</div>

