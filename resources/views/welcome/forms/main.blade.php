<h3 class=" bg-green-100 mb-4 mt-6 p-2 text-3xl font-bold text-neutral-800 dark:text-neutral-200">
    Formulario de Registro
</h3>

<!--Tabs navigation-->
<ul class="mb-5 flex list-none flex-row flex-wrap border-b-0 ps-0" role="tablist" data-twe-nav-ref>
    <li role="presentation" class="flex-grow basis-0 text-center">
        <a href="#tabs-home02"
            class="my-2 block border-x-0 border-b-2 border-t-0 border-transparent px-7 pb-3.5 pt-4 text-xs font-medium uppercase leading-tight text-neutral-500 hover:isolate hover:border-transparent hover:bg-neutral-100 focus:isolate focus:border-transparent data-[twe-nav-active]:border-primary data-[twe-nav-active]:text-primary dark:text-white/50 dark:hover:bg-neutral-700/60 dark:data-[twe-nav-active]:text-primary"
            data-twe-toggle="pill" data-twe-target="#tabs-home02" data-twe-nav-active role="tab"
            aria-controls="tabs-home02" aria-selected="true">Empleados</a>
    </li>
    <li role="presentation" class="flex-grow basis-0 text-center">
        <a href="#tabs-profile02"
            class="my-2 block border-x-0 border-b-2 border-t-0 border-transparent px-7 pb-3.5 pt-4 text-xs font-medium uppercase leading-tight text-neutral-500 hover:isolate hover:border-transparent hover:bg-neutral-100 focus:isolate focus:border-transparent data-[twe-nav-active]:border-primary data-[twe-nav-active]:text-primary dark:text-white/50 dark:hover:bg-neutral-700/60 dark:data-[twe-nav-active]:text-primary"
            data-twe-toggle="pill" data-twe-target="#tabs-profile02" role="tab" aria-controls="tabs-profile02"
            aria-selected="false">Empleadores</a>
    </li>

</ul>

<!--Tabs content-->
<div class="mb-6">
    <div class="hidden opacity-100 transition-opacity duration-150 ease-linear data-[twe-tab-active]:block"
        id="tabs-home02" role="tabpanel" aria-labelledby="tabs-home-tab02" data-twe-tab-active>
        @include('welcome.forms.employes')
        
    </div>
    <div class="hidden opacity-0 transition-opacity duration-150 ease-linear data-[twe-tab-active]:block"
        id="tabs-profile02" role="tabpanel" aria-labelledby="tabs-profile-tab02">
        @include('welcome.forms.employers')
    </div>
</div>