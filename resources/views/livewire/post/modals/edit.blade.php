<x-modal wire:model.defer="modeEdit" blur max-width="sm">

    <x-errors />

    <x-card title="Actualizar post ...">

        <form wire:submit.prevent="updatePost">

            @include('livewire.post.form.fields')

            <!-- Submit Button -->
            <x-primary-button class="w-full text-center" type="submit">
                {{ __('Guardar') }}
            </x-primary-button>
            
        </form>        

    </x-card>

</x-modal>