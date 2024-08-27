<x-dropdown >

    <x-slot name="trigger">
        <!-- First dropdown trigger -->
        <a class="me-4 flex items-center text-black/50" href="#" id="dropdownMenuButton1" role="button" data-twe-dropdown-toggle-ref aria-expanded="false">
            <!-- Dropdown trigger icon -->
            <span class="[&>svg]:w-">
                <x-icon name="user" class="w-8 h-8" />
            </span>
            <!-- Notification counter -->
            {{-- <span class="absolute -mt-8 ms-5 rounded-full bg-danger px-[0.35em] py-[0.15em] text-[1rem] font-bold leading-none text-red-400 bg-neutral-200">1</span> --}}
        </a>
    </x-slot>

    <x-dropdown.item label="Panel" href="{{ route('dashboard') }}"/>
    <x-dropdown.item label="Mi Perfil" href="{{ route('profile.edit') }}"/>

    <x-dropdown.item separator>        
        <div>
            <form method="POST" action="{{ route('logout') }}" x-data>
                @csrf
                <b @click.prevent="$root.submit();">Salir</b>
            </form>
        </div>
    </x-dropdown.item>

</x-dropdown>