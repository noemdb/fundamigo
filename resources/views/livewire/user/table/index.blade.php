

<table class="min-w-full text-start text-sm font-light text-surface">
    <thead class="border-b border-neutral-200 font-medium">
        <tr>
            <th scope="col" class="px-2 py-2 text-left">#</th>
            <th scope="col" class="px-2 py-2 text-left">Nom.Usuario</th>
            <th scope="col" class="px-2 py-2 text-left">Email</th>
            <th scope="col" class="px-2 py-2 text-left">A.Conocimiento</th>
            <th scope="col" class="px-2 py-2 text-left">Image</th>
        </tr>
    </thead>
    <tbody>
        @forelse ($users as $item)
            <tr class="border-b border-neutral-200 hover:bg-neutral-100">
                <td class="whitespace-nowrap px-2 py-2 font-medium">{{$loop->iteration}}</td>
                <td class="whitespace-nowrap px-2 py-2">
                    <div>{{$item->name}}</div>
                    <div class=" font-bold">{{optional($item->profile)->fullname}}</div>                    
                </td>           
                <td class="whitespace-nowrap px-2 py-2">{{$item->email}}</td>                 
                @php $areas_of_expertise = optional($item->profile)->areas_of_expertise; @endphp
                <td class="whitespace-nowrap px-2 py-2">{{$areas_of_expertise}}</td>  
                <td class="whitespace-nowrap px-2 py-2">
                    @php $src = optional($item->profile)->image; @endphp
                    <x-avatar xl :src="$src" size="w-14 h-14"/>
                </td>         
            </tr>
        @empty
            <tr class="border-b border-neutral-200 hover:bg-neutral-100">
                <td class="whitespace-nowrap px-6 py-4 font-medium">No hay datos</td>         
            </tr>
        @endforelse      
    </tbody>
</table>

{{ $users->links() }}