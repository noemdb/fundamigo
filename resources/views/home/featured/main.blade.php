<!-- Container for demo purpose -->
<div class="container-fluid my-2 px-2 md:px-2 bg-gray-200 border rounded">
    <!-- Section: Design Block -->
    <section class="mb-2">
        <h2 class="mb-2 text-center text-xl lg:text-3xl font-bold">
            Nuestras carácteristicas más destacadas?
        </h2>

        <div class="flex flex-wrap items-center">
            {{-- main --}}
            <div class="mb-12 w-full shrink-0 grow-0 basis-auto md:px-6 lg:mb-0 lg:w-5/12">
                <div class="relative overflow-hidden rounded-lg bg-cover bg-[50%] bg-no-repeat shadow-lg"
                    data-te-ripple-init data-te-ripple-color="light">
                    <img src="https://mdbcdn.b-cdn.net/img/new/textures/full/98.jpg" class="w-full" />
                    <a href="#!">
                        <div
                            class="absolute top-0 right-0 bottom-0 left-0 h-full w-full overflow-hidden bg-[hsl(0,0%,0%,0.4)] bg-fixed">
                            <div class="flex h-full items-center justify-center">
                                <div class="px-6 py-12 text-center text-white md:px-12">
                                    <h3 class="mb-6 text-lg lg:text-2xl font-bold uppercase">
                                        Enfoque integral en el desarrollo 
                                        <u class="text-[hsl(210,12%,80%)]">estudiantil</u>
                                    </h3>
                                    <p class="text-[hsl(210,12%,80%)]" style="font-size: 1rem">
                                        La Fundación <strong>FUNDAMIGO</strong> tiene como objetivos principales garantizar el acceso a la educación, fomentar la excelencia académica, promover el desarrollo integral de los estudiantes y fortalecer la comunidad educativa. Trabajan para eliminar barreras económicas, elevar los estándares educativos, brindar apoyo emocional y fortalecer las habilidades sociales de los estudiantes. Además, colaboran con instituciones educativas y organizaciones para maximizar su impacto y generar un cambio positivo en la educación.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="relative overflow-hidden bg-cover bg-no-repeat">
                            <div
                                class="absolute top-0 right-0 bottom-0 left-0 h-full w-full overflow-hidden bg-[hsl(0,0%,98.4%,0.2)] bg-fixed opacity-0 transition duration-300 ease-in-out hover:opacity-100">
                            </div>
                        </div>
                    </a>
                </div>
            </div>

            {{-- items --}}
            <div class="w-full shrink-0 grow-0 basis-auto md:px-6 lg:w-7/12">

                @forelse ($featureds as $item)
                    <div class="mb-12 flex">
                        <div class="shrink-0">
                            <div class="rounded-md bg-[hsl(204,30%,20%)] p-4 shadow-lg">
                                {!!$item->svg!!}
                            </div>
                        </div>
                        <div class="ml-4 grow">
                            <p class="mb-1 font-bold border-b-2 border-gray-200 text-lg">
                                {{$item->title}}
                            </p>
                            <div class="text-neutral-700 pb-2">{!! $item->description !!}</div>
                            
                            <p class="text-neutral-400">

                                <div x-data="{ expandido: false }">
                                    <div :class="{ 'contenido': !expandido, 'expandido': expandido }">
                                        {!! $item->body !!}
                                    </div>
                                    <a href="#" @click.prevent="expandido = !expandido">
                                        <span class="font-bold" x-text="expandido ? 'Mostrar menos' : 'Mostrar más'"></span>
                                    </a>
                                </div>
                                
                            </p>
                        </div>
                    </div>
                @empty
                    <div>no hay posts registrados en esta section</div>
                @endforelse

                @php /* @endphp

                <div class="mb-12 flex">
                    <div class="shrink-0">
                        <div class="rounded-md bg-[hsl(204,30%,20%)] p-4 shadow-lg">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2"
                                stroke="currentColor" class="h-6 w-6 text-white">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M9 12.75L11.25 15 15 9.75m-3-7.036A11.959 11.959 0 013.598 6 11.99 11.99 0 003 9.749c0 5.592 3.824 10.29 9 11.623 5.176-1.332 9-6.03 9-11.622 0-1.31-.21-2.571-.598-3.751h-.152c-3.196 0-6.1-1.248-8.25-3.285z" />
                            </svg>
                        </div>
                    </div>
                    <div class="ml-4 grow">
                        <p class="mb-1 font-bold">Compromiso con la excelencia académica:</p>
                        <p class="text-neutral-500">
                            <strong>FUNDAMIGO</strong> se esfuerza por fomentar la excelencia académica en todos los estudiantes que apoya. A través de programas de tutorías, capacitaciones para maestros y la implementación de metodologías educativas innovadoras, la organización busca elevar los estándares educativos y promover el amor por el aprendizaje en los estudiantes.
                        </p>
                    </div>
                </div>

                <div class="mb-12 flex">
                    <div class="shrink-0">
                        <div class="rounded-md bg-[hsl(204,30%,20%)] p-4 shadow-lg">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2"
                                stroke="currentColor" class="h-6 w-6 text-white">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M15.59 14.37a6 6 0 01-5.84 7.38v-4.8m5.84-2.58a14.98 14.98 0 006.16-12.12A14.98 14.98 0 009.631 8.41m5.96 5.96a14.926 14.926 0 01-5.841 2.58m-.119-8.54a6 6 0 00-7.381 5.84h4.8m2.581-5.84a14.927 14.927 0 00-2.58 5.84m2.699 2.7c-.103.021-.207.041-.311.06a15.09 15.09 0 01-2.448-2.448 14.9 14.9 0 01.06-.312m-2.24 2.39a4.493 4.493 0 00-1.757 4.306 4.493 4.493 0 004.306-1.758M16.5 9a1.5 1.5 0 11-3 0 1.5 1.5 0 013 0z" />
                            </svg>
                        </div>
                    </div>
                    <div class="ml-4 grow">
                        <p class="mb-1 font-bold">Apoyo financiero y becas:</p>
                        <p class="text-neutral-500">
                            La Fundación <strong>FUNDAMIGO</strong> comprende que muchos estudiantes enfrentan barreras financieras para acceder a una educación de calidad. Por eso, la organización ofrece apoyo financiero y becas que cubren los costos de matrícula, libros y otros gastos relacionados. Estas becas brindan a los estudiantes la oportunidad de seguir sus estudios sin tener que preocuparse por las limitaciones económicas.
                        </p>
                    </div>
                </div>                

                <div class="flex">
                    <div class="shrink-0">
                        <div class="rounded-md bg-[hsl(204,30%,20%)] p-4 shadow-lg">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2"
                                stroke="currentColor" class="h-6 w-6 text-white">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M10.5 6a7.5 7.5 0 107.5 7.5h-7.5V6z" />
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M13.5 10.5H21A7.5 7.5 0 0013.5 3v7.5z" />
                            </svg>
                        </div>
                    </div>
                    <div class="ml-4 grow">
                        <p class="mb-1 font-bold">Colaboraciones estratégicas:</p>
                        <p class="text-neutral-500">
                            <strong>FUNDAMIGO</strong> entiende que el trabajo colaborativo es fundamental para lograr un mayor impacto. La fundación establece alianzas estratégicas con instituciones educativas, empresas, organizaciones sin fines de lucro y otras entidades para maximizar sus recursos y ampliar su alcance. Estas colaboraciones permiten el intercambio de conocimientos, la implementación de programas conjuntos y la creación de sinergias para el beneficio de los estudiantes.
                        </p>
                    </div>
                </div>

                @php */ @endphp
            </div>
        </div>
    </section>
    <!-- Section: Design Block -->
</div>
<!-- Container for demo purpose -->