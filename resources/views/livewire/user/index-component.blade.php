<div>
    {{-- {{$users ?? 'NULL'}} --}}

    <div class="py-2 z-50">
        <x-select
            label="Seleccione un área de conocimiento"
            placeholder="Seleccione un área"
            :options="$list_expertise"
            wire:model.live="expertise"
            :option-key-value="false"
        />
        <x-input-error class="mt-2" :messages="$errors->get('areas_of_expertise')" />
    </div>

    @include('livewire.user.table.index')
    
</div>
