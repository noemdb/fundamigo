<!-- Main navigation container -->
<nav
    class="flex-no-wrap relative flex w-full items-center justify-between bg-indigo-500 py-2 shadow-dark-mild dark:bg-neutral-700 lg:flex-wrap lg:justify-start lg:py-4">
    <div class="flex w-full flex-wrap items-center justify-between px-3">
        <!-- Hamburger button for mobile view -->
        @include('welcome.header.partials.hamburger') 

        <!-- Collapsible navigation container -->
        <div class="!visible hidden flex-grow basis-[100%] items-center lg:!flex lg:basis-auto" id="navbarSupportedContent1" data-twe-collapse-item>
            <!-- Logo -->
            @include('welcome.header.partials.icon')

            <!-- Left navigation links -->
            @include('welcome.header.partials.navigation')
            <!-- Left links -->
        </div>

        <!-- Right elements -->
        <div class="relative flex items-center">
            <!-- Icon -->
            @include('welcome.header.partials.icons')            

            <!-- First dropdown container -->
            @include('welcome.header.partials.notifyDropdown')           
            
            <!-- Second dropdown container -->
            @include('welcome.header.partials.userDropdown')

        </div>
        <!-- Right elements -->
    </div>
</nav>