<x-modal wire:model.defer="modeCreate" blur max-width="">
    <x-card title="Crear post">
        <p class="text-gray-600">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint tempore corporis eaque autem, maxime eum veniam, harum debitis, odit unde voluptas et fugiat ducimus accusantium atque. Ducimus natus rerum minima.
        </p>
        <x-slot name="footer">
            <div class="flex justify-end gap-x-4">
                <x-button flat label="Cancel" x-on:click="close" />
                <x-button primary label="I Agree" />
            </div>
        </x-slot>
    </x-card>
</x-modal>