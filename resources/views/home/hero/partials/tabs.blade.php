
<!--Tabs navigation-->
<ul class="mb-4 flex list-none flex-row flex-wrap border-b-0 ps-0" id="tabs-tab3" role="tablist" data-twe-nav-ref>
    <li role="presentation" class="flex-auto text-center">
        <a href="#tabs-home3"
            class="my-2 block border-x-0 border-b-2 border-t-0 border-transparent px-7 pb-3.5 pt-4 text-lg font-medium uppercase leading-tight text-neutral-500 hover:isolate hover:border-transparent hover:bg-neutral-100 focus:isolate focus:border-transparent data-[twe-nav-active]:border-primary data-[twe-nav-active]:text-primary dark:text-white/50 dark:hover:bg-neutral-700/60 dark:data-[twe-nav-active]:text-primary"
            id="tabs-home-tab3" data-twe-toggle="pill" data-twe-target="#tabs-home3" data-twe-nav-active role="tab"
            aria-controls="tabs-home3" aria-selected="true">Iniciar Sesión</a>
    </li>
    <li role="presentation" class="flex-auto text-center">
        <a href="#tabs-profile3"
            class="my-2 block border-x-0 border-b-2 border-t-0 border-transparent px-7 pb-3.5 pt-4 text-lg font-medium uppercase leading-tight text-neutral-500 hover:isolate hover:border-transparent hover:bg-neutral-100 focus:isolate focus:border-transparent data-[twe-nav-active]:border-primary data-[twe-nav-active]:text-primary dark:text-white/50 dark:hover:bg-neutral-700/60 dark:data-[twe-nav-active]:text-primary"
            id="tabs-profile-tab3" data-twe-toggle="pill" data-twe-target="#tabs-profile3" role="tab"
            aria-controls="tabs-profile3" aria-selected="false">Registrate</a>
    </li>
</ul>

<!--Tabs content-->
<div>
    <div class="hidden opacity-100 transition-opacity duration-150 ease-linear data-[twe-tab-active]:block" id="tabs-home3" role="tabpanel" data-twe-tab-active aria-labelledby="tabs-home-tab3">
        @include('home.hero.partials.login')
    </div>
    <div class="hidden opacity-0 transition-opacity duration-150 ease-linear data-[twe-tab-active]:block" id="tabs-profile3" role="tabpanel" aria-labelledby="tabs-profile-tab3">
        @include('home.hero.partials.singup')
    </div>
</div>