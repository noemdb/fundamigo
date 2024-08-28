<table class="min-w-full text-start text-sm font-light text-surface">
    <thead class="border-b border-neutral-200 font-medium">
        <tr class="text-left">
            <th scope="col" class="px-6 py-4">#</th>
            <th scope="col" class="px-6 py-4">Nombre</th>
            <th scope="col" class="px-6 py-4">Email</th>
            <th scope="col" class="px-6 py-4">Image</th>
            <th scope="col" class="px-6 py-4 text-right">Acción</th>
        </tr>
    </thead>
    <tbody>
        @forelse ($posts as $item)
            <tr class="border-b border-neutral-200 hover:bg-neutral-100">
                <td class="whitespace-nowrap px-6 py-4 font-medium">{{$loop->iteration}}</td>
                <td class="whitespace-nowrap px-6 py-4">{{$item->name}}</td>           
                <td class="whitespace-nowrap px-6 py-4">{{$item->email}}</td>           
                <td class="whitespace-nowrap px-6 py-4">{{$item->profile_photo_url}}</td>           
                <td class="whitespace-nowrap px-6 py-4 text-right">
                    <x-button right-icon="plus" info label="Nuevo" wire:click="setModeEdit({{$item->id}})"/>
                </td>           
            </tr>
        @empty
            <tr class="border-b border-neutral-200 hover:bg-neutral-100">
                <td class="whitespace-nowrap px-6 py-4 font-medium">No hay datos</td>         
            </tr>
        @endforelse      
    </tbody>
</table>