<x-modal wire:model.defer="modeCreate" blur max-width="sm">

    <x-card title="Crear post ...">

        <form wire:submit.prevent="storePost">

            @include('livewire.post.form.fields')

            <!-- Submit Button -->
            <x-primary-button class="w-full" type="submit">
                {{ __('Guardar') }}
            </x-primary-button>
            
        </form>
        

    </x-card>

</x-modal>