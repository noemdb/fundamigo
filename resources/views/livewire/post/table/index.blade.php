<table class="min-w-full text-start text-sm font-light text-surface">
    <thead class="border-b border-neutral-200 font-medium">
        <tr class="text-left">
            <th scope="col" class="px-2 py-2 text-left">#</th>
            <th scope="col" class="px-2 py-2 text-left">Título</th>
            <th scope="col" class="px-2 py-2 text-left">Descripción</th>
            <th scope="col" class="px-2 py-2 text-left">Categoría</th>
            <th scope="col" class="px-2 py-2 text-left">Estado</th>
            <th scope="col" class="px-2 py-2 text-left">Publicado</th>
            <th scope="col" class="px-2 py-2 text-left">Image</th>
            <th scope="col" class="px-2 py-2 text-right">Acción</th>
        </tr>
    </thead>
    <tbody>
        @forelse ($posts as $item)
            
            <tr class="border-b border-neutral-200 hover:bg-neutral-100">
                <td class="whitespace-nowrap px-2 py-1 font-medium">{{$loop->iteration}}</td>
                <td class="whitespace-nowrap px-2 py-1">{{$item->title}}</td>           
                <td class="whitespace-nowrap px-2 py-1">{{$item->description}}</td>           
                <td class="whitespace-nowrap px-2 py-1">{{$item->category->name ?? null}}</td>           
                <td class="whitespace-nowrap px-2 py-1">{{ ($item->status_active) ? 'SI' : 'NO'}}</td>           
                <td class="whitespace-nowrap px-2 py-1">{{ ($item->status_published) ? 'SI' : 'NO'}}</td>           
                <td class="whitespace-nowrap px-2 py-1">
                    @php $image = $item->file_url; @endphp
                    @if ($image) <img src="{{ $image }}"> @endif    
                </td>           
                <td class="whitespace-nowrap px-2 py-1 text-right">
                    <x-button right-icon="pencil" warning wire:click="setModeEdit({{$item->id}})"/>
                </td>           
            </tr>
        @empty
            <tr class="border-b border-neutral-200 hover:bg-neutral-100">
                <td class="whitespace-nowrap px-2 py-1 font-medium">No hay datos</td>         
            </tr>
        @endforelse      
    </tbody>
</table>

{{ $posts->links() }}