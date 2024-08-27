<!-- Main navigation container -->
<nav
    class="flex-no-wrap relative flex w-full items-center justify-between bg-indigo-500 py-2 shadow-dark-mild lg:flex-wrap lg:justify-start lg:py-4">
    <div class="flex w-full flex-wrap items-center justify-between px-3">
        <!-- Hamburger button for mobile view -->
        @include('home.header.partials.hamburger') 

        <!-- Collapsible navigation container -->
        <div class="!visible hidden flex-grow basis-[100%] items-center lg:!flex lg:basis-auto" id="navbarSupportedContent1" data-twe-collapse-item>
            <!-- Logo -->
            @include('home.header.partials.icon')

            <!-- Left navigation links -->
            @include('home.header.partials.navigation')
            <!-- Left links -->
        </div>

        <!-- Right elements -->
        <div class="relative flex justify-end">

            @if (Route::has('login'))                
                    @auth                 
                        <!-- Icon -->
                        @include('home.header.partials.icons')
                        <!-- First dropdown container -->
                        @include('home.header.partials.dropdownNotify') 
                        <!-- Second dropdown container -->
                        @include('home.header.partials.dropdownUser')
                    @else
                        <div class="sm:fixed sm:top-0 sm:right-0 p-6 text-end z-10">
                            <a href="{{ route('login') }}" class="font-semibold text-white hover:text-gray-900 focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500" wire:navigate>Iniciar sesión</a>
                            @if (Route::has('register'))
                                <a href="{{ route('register') }}" class="ms-4 font-semibold text-white hover:text-gray-900 focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500" wire:navigate>Registrarse</a>
                            @endif
                        </div>
                    @endauth                
            @endif           

        </div>
        <!-- Right elements -->
    </div>
</nav>