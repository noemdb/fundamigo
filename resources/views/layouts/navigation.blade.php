<nav x-data="{ open: false }" class="bg-[hsl(218,58%,84%)] border-b border-gray-00">
    <!-- Primary Navigation Menu -->
    {{-- <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8"> --}}
    <div class="w-full px-2 ">
        <div class="flex justify-between h-16 ">
            <div class="flex">
                <!-- Logo -->
                <div class="shrink-0 flex items-center">
                    <a href="{{ route('home') }}">
                        <x-application-logo class="block h-9 w-auto fill-current text-gray-800" />
                    </a>
                </div>

                <!-- Navigation Links -->
                <div class="hidden space-x-8 sm:-my-px sm:ms-10 sm:flex">
                    <x-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')">
                        {{ __('Dashboard') }}
                    </x-nav-link>
                </div>

                @hasrole('Admin')
                    <div class="hidden space-x-8 sm:-my-px sm:ms-10 sm:flex">
                        <x-nav-link :href="route('users')" :active="request()->routeIs('users')">
                            {{ __('Usuarios') }}
                        </x-nav-link>
                    </div>

                    <div class="hidden space-x-8 sm:-my-px sm:ms-10 sm:flex">
                        <x-nav-link :href="route('posts')" :active="request()->routeIs('posts')">
                            {{ __('Post') }}
                        </x-nav-link>
                    </div>
                @endhasrole                

            </div>

            <!-- Settings Dropdown -->
            <div class="hidden sm:flex sm:items-center sm:ms-6">
                                
                <x-dropdown>

                    <x-slot name="trigger">
                        <a class="me-4 flex items-center text-black/50" href="#" id="dropdownMenuButton1" role="button" data-twe-dropdown-toggle-ref aria-expanded="false">
                            <!-- Dropdown trigger icon -->
                            <span class="[&>svg]:w-">
                                <x-icon name="menu" class="w-8 h-8" />
                            </span>
                        </a>
                    </x-slot>

                    <x-dropdown.item separator>
                        <div class="font-bold">{{Auth::user()->name}}</div> 
                    </x-dropdown.item>
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
                
            </div>

            <!-- Hamburger -->
            <div class="-me-2 flex items-center sm:hidden">
                <button @click="open = ! open" class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 focus:text-gray-500 transition duration-150 ease-in-out">
                    <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                        <path :class="{'hidden': open, 'inline-flex': ! open }" class="inline-flex" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                        <path :class="{'hidden': ! open, 'inline-flex': open }" class="hidden" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <!-- Responsive Navigation Menu -->
    <div :class="{'block': open, 'hidden': ! open}" class="hidden sm:hidden">
        <div class="pt-2 pb-3 space-y-1">
            <x-responsive-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')">
                {{ __('Dashboard') }}
            </x-responsive-nav-link>
            <x-responsive-nav-link :href="route('users')" :active="request()->routeIs('users')">
                {{ __('Usuarios') }}
            </x-responsive-nav-link>
            <x-responsive-nav-link :href="route('posts')" :active="request()->routeIs('posts')">
                {{ __('Post') }}
            </x-responsive-nav-link>
        </div>

        <!-- Responsive Settings Options -->
        <div class="pt-4 pb-1 border-t border-gray-200">
            <div class="px-4">
                <div class="font-medium text-base text-gray-800">{{ Auth::user()->name }}</div>
                <div class="font-medium text-sm text-gray-500">{{ Auth::user()->email }}</div>
            </div>

            <div class="mt-3 space-y-1">
                <x-responsive-nav-link :href="route('profile.edit')">
                    {{ __('Profile') }}
                </x-responsive-nav-link>

                <!-- Authentication -->
                <form method="POST" action="{{ route('logout') }}">
                    @csrf

                    <x-responsive-nav-link :href="route('logout')"
                            onclick="event.preventDefault();
                                        this.closest('form').submit();">
                        {{ __('Log Out') }}
                    </x-responsive-nav-link>
                </form>
            </div>
        </div>
    </div>

</nav>
