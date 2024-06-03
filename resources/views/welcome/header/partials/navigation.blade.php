<ul class="ml-2 list-style-none me-auto flex flex-col ps-0 lg:flex-row" data-twe-navbar-nav-ref>
    <li class="mb-4 lg:mb-0 lg:pe-2 flex justify-end" data-twe-nav-item-ref>
        <!-- Dashboard link -->
        <a class="text-white/60 transition duration-200 hover:text-black/80 hover:ease-in-out focus:text-black/80 active:text-black/80 motion-reduce:transition-none dark:text-white/60 dark:hover:text-white/80 dark:focus:text-white/80 dark:active:text-white/80 lg:px-2"
            href="#" data-twe-nav-link-ref>Inicio</a>
    </li>

    <!-- Team link -->
    <li class="mb-4 lg:mb-0 lg:pe-2 flex justify-end" data-twe-nav-item-ref>
        <x-dropdown>
            <x-slot name="trigger">
                <span class="text-white/60 transition duration-200 hover:text-black/80 hover:ease-in-out focus:text-black/80 active:text-black/80 motion-reduce:transition-none dark:text-white/60 dark:hover:text-white/80 dark:focus:text-white/80 dark:active:text-white/80 lg:px-2">
                    Participa
                </span>
            </x-slot>         
            <x-dropdown.item label="Nuestro Equipo" />
            <x-dropdown.item label="Nuestro Impacto" />
            <x-dropdown.item label="Testimonios" />
            <x-dropdown.item separator label="Únete a la fla. Amigoniana" />
        </x-dropdown>
    </li>

    <!-- Team project -->
    <li class="mb-4 lg:mb-0 lg:pe-2 flex justify-end" data-twe-nav-item-ref>
        <x-dropdown>
            <x-slot name="trigger">
                <span class="text-white/60 transition duration-200 hover:text-black/80 hover:ease-in-out focus:text-black/80 active:text-black/80 motion-reduce:transition-none dark:text-white/60 dark:hover:text-white/80 dark:focus:text-white/80 dark:active:text-white/80 lg:px-2">
                    Proyectos
                </span>
            </x-slot>         
            <x-dropdown.item label="Proyectos educativos" />
            <x-dropdown.item label="Becas escolares" />
        </x-dropdown>
    </li>

    <!-- Team Voluntariao -->
    <li class="mb-4 lg:mb-0 lg:pe-2 flex justify-end" data-twe-nav-item-ref>
        <x-dropdown>
            <x-slot name="trigger">
                <span class="text-white/60 transition duration-200 hover:text-black/80 hover:ease-in-out focus:text-black/80 active:text-black/80 motion-reduce:transition-none dark:text-white/60 dark:hover:text-white/80 dark:focus:text-white/80 dark:active:text-white/80 lg:px-2">
                    Involúcrate
                </span>
            </x-slot>         
            <x-dropdown.item label="Colabora con nosotros" />
            <x-dropdown.item label="Haz una donación" />
            <x-dropdown.item label="Voluntariado" />
        </x-dropdown>
    </li>

    <!-- Team Voluntariao -->
    <li class="mb-4 lg:mb-0 lg:pe-2 flex justify-end" data-twe-nav-item-ref>
        <x-dropdown>
            <x-slot name="trigger">
                <span class="text-white/60 transition duration-200 hover:text-black/80 hover:ease-in-out focus:text-black/80 active:text-black/80 motion-reduce:transition-none dark:text-white/60 dark:hover:text-white/80 dark:focus:text-white/80 dark:active:text-white/80 lg:px-2">
                    Contacto
                </span>
            </x-slot>         
            <x-dropdown.item label="Eventos y actividades" />
            <x-dropdown.item label="Contáctanos" />
        </x-dropdown>
    </li>

    <!-- Projects link -->
    <li class="mb-4 lg:mb-0 lg:pe-2 flex justify-end" data-twe-nav-item-ref>
        <a class="text-white/60 transition duration-200 hover:text-black/80 hover:ease-in-out focus:text-black/80 active:text-black/80 motion-reduce:transition-none dark:text-white/60 dark:hover:text-white/80 dark:focus:text-white/80 dark:active:text-white/80 lg:px-2"
            href="#" data-twe-nav-link-ref>Acerca de ...</a>
    </li>
</ul>

{{--
1. Conócenos y participa:
    1.1 Acerca de nosotros
    1.2 Nuestro impacto
    1.3 Testimonios
    1.4 Únete a la familia Amigoniana
2. Programas y proyectos educativos:
    2.1 Proyectos educativos
    2.2 Becas escolares
3. Involúcrate y colabora:
    3.1 Colabora con nosotros
    3.2 Haz una donación
    3.3 Voluntariado
4. Información y contacto:
    4.1 Eventos y actividades
    4.2 Contáctanos    
    
    --}}