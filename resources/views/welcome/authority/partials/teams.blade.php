<!-- Container for demo purpose -->
<div class="container my-2 mx-auto md:px-6 bg-neutral-100">
    <!-- Section: Design Block -->
    <section class="mb-4 text-center">
        <h2 class="mb-2 text-3xl font-bold">
            Conoce a nuestros <u class="text-primary dark:text-primary-400">Directivos</u>
        </h2>

        <div class="grid gap-x-6 md:grid-cols-3 lg:gap-x-12">
            <div class="mb-6 lg:mb-0">
                <div
                    class="block rounded-lg bg-green-200 shadow-[0_2px_15px_-3px_rgba(0,0,0,0.07),0_10px_20px_-2px_rgba(0,0,0,0.04)] dark:bg-neutral-700">
                    <div class="relative overflow-hidden bg-cover bg-no-repeat">
                        <img src="https://mdbcdn.b-cdn.net/img/new/avatars/6.jpg" class="w-full rounded-t-lg" />
                        <a href="#!">
                            <div class="absolute top-0 right-0 bottom-0 left-0 h-full w-full overflow-hidden bg-fixed">
                            </div>
                        </a>
                        @include('svg.wave')
                    </div>
                    <div class="p-6">
                        <h5 class="mb-1 text-lg font-bold">Maria López</h5>
                        <p class=" font-light mb-1 text-neutral-500 dark:text-neutral-300">Directora Ejecutiva</p>
                        <div class="text-sm text-neutral-400 font-bold dark:text-neutral-300 border-b-2 my-2">
                            Líder apasionada por la educación. Con más de 15 años de experiencia en el campo, ha liderado exitosamente proyectos educativos a gran escala. Su visión estratégica y su compromiso con la igualdad educativa impulsan el crecimiento y el impacto de <strong>FUNDAMIGO</strong>.
                        </div>
                        @include('welcome.authority.partials.social')
                        
                    </div>
                </div>
            </div>

            <div class="mb-6 lg:mb-0">
                <div
                    class="block rounded-lg bg-green-200 shadow-[0_2px_15px_-3px_rgba(0,0,0,0.07),0_10px_20px_-2px_rgba(0,0,0,0.04)] dark:bg-neutral-700">
                    <div class="relative overflow-hidden bg-cover bg-no-repeat">
                        <img src="https://mdbcdn.b-cdn.net/img/new/avatars/8.jpg" class="w-full rounded-t-lg" />
                        <a href="#!">
                            <div class="absolute top-0 right-0 bottom-0 left-0 h-full w-full overflow-hidden bg-fixed">
                            </div>
                        </a>
                        @include('svg.wave')                       
                    </div>
                    <div class="p-6">
                        <h5 class="mb-4 text-lg font-bold">Roberto Ramírez</h5>
                        <p class=" font-light mb-4 text-neutral-500 dark:text-neutral-300">Director de Programas Educativos</p>
                        <div class="text-sm text-neutral-400 font-bold dark:text-neutral-300 border-b-2 my-2">
                            Roberto es un educador dedicado con una amplia experiencia en el diseño y la implementación de programas educativos innovadores. Su pasión por la enseñanza y su enfoque en el aprendizaje centrado en el estudiante garantizan que los programas de <strong>FUNDAMIGO</strong> sean de alta calidad y estén alineados con las necesidades de los estudiantes.
                        </div>
                        @include('welcome.authority.partials.social')
                    </div>
                </div>
            </div>

            <div class="">
                <div
                    class="block rounded-lg bg-green-200 shadow-[0_2px_15px_-3px_rgba(0,0,0,0.07),0_10px_20px_-2px_rgba(0,0,0,0.04)] dark:bg-neutral-700">
                    <div class="relative overflow-hidden bg-cover bg-no-repeat">
                        <img src="https://mdbcdn.b-cdn.net/img/new/avatars/15.jpg" class="w-full rounded-t-lg" />
                        <a href="#!">
                            <div class="absolute top-0 right-0 bottom-0 left-0 h-full w-full overflow-hidden bg-fixed">
                            </div>
                        </a>@include('svg.wave')
                    </div>
                    <div class="p-6">
                        <h5 class="mb-4 text-lg font-bold">María Fernández</h5>
                        <p class=" font-light mb-4 text-neutral-500 dark:text-neutral-300">Directora de Recaudación de Fondos</p>
                        @include('welcome.authority.partials.social')

                        <div class="text-sm text-neutral-400 font-bold dark:text-neutral-300 border-b-2 my-2">
                            María es una experta en recaudación de fondos y desarrollo de recursos con una sólida trayectoria en organizaciones sin fines de lucro. Su compromiso y habilidades en la búsqueda de financiamiento son fundamentales para asegurar los recursos necesarios para expandir el impacto de <strong>FUNDAMIGO</strong> y llegar a más estudiantes.
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Section: Design Block -->
</div>
<!-- Container for demo purpose -->