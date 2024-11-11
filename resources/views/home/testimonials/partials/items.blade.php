<!-- Container for demo purpose -->
<div class="container my-2 mx-auto md:px-6">
    <section class="mb-2 text-center">

        <div class="grid gap-x-6 md:grid-cols-3 lg:gap-x-12">

            @forelse ($testimonials as $item)
                <div class=" mb-12 md:mb-0 bg-green-100">
                    <div class="mb-6 flex justify-center">
                        <img src="{{$item->file_url}}"
                            class="w-32 rounded-full shadow-lg" />
                    </div>
                    <div>
                        {!! $item->body !!}
                    </div>
                    <h5 class="mb-2 text-lg font-bold">{{$item->title}}</h5>
                    <h6 class="mb-0 font-medium text-primary">{{$item->description}}</h6>
                    <p class="text-sm mb-2">
                        {{-- {!!$item->svg!!} --}}
                    </p>
                    @include('svg.starts')
                </div>
            @empty
            <div>no hay posts registrados en esta section</div>
            @endforelse            

            @php /* @endphp
            <div class=" mb-12 md:mb-0 bg-green-100">
                <div class="mb-6 flex justify-center">
                    <img src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/img%20(2).jpg"
                        class="w-32 rounded-full shadow-lg" />
                </div>
                <h5 class="mb-2 text-lg font-bold">Lisa Cudrow</h5>
                <h6 class="mb-0 font-medium text-primary">
                    Voluntaria de <strong>FUNDAMIGO</strong>
                </h6>
                <p class="text-sm mb-2">
                    Como voluntaria de <strong>FUNDAMIGO</strong>, he tenido la oportunidad de ser testigo de los cambios positivos que esta organización genera en la vida de los estudiantes. Ver cómo su confianza y habilidades se desarrollan a medida que reciben una educación de calidad es realmente gratificante. <strong>FUNDAMIGO</strong> no solo les brinda oportunidades educativas, sino que también les muestra que sus sueños son alcanzables. Estoy orgullosa de ser parte de esta increíble misión.
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 96 960 960" class="inline-block w-6">
                        <path fill="currentColor"
                            d="M580 556h160V396H580v160Zm-360 0h160V396H220v160Zm406 220 80-160H520V336h280v288l-76 152h-98Zm-360 0 80-160H160V336h280v288l-76 152h-98Zm34-300Zm360 0Z" />
                    </svg>
                </p>
                @include('svg.starts')
            </div>
            <div class=" mb-12 md:mb-0 bg-green-100">
                <div class="mb-6 flex justify-center">
                    <img src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/img%20(9).jpg"
                        class="w-32 rounded-full shadow-lg" />
                </div>
                <h5 class="mb-2 text-lg font-bold">John Smith</h5>
                <h6 class="mb-0 font-medium text-primary">
                    Marketing
                </h6>
                <p class="text-sm mb-2">
                    Mi hija ha sido beneficiaria de los programas educativos de <strong>FUNDAMIGO</strong> durante varios años y estoy asombrada por el impacto que ha tenido en su vida. Ha tenido acceso a talleres, mentorías y oportunidades de aprendizaje únicas. Su autoestima y sus habilidades académicas han mejorado significativamente. Estoy profundamente agradecida por el compromiso y la dedicación del equipo de <strong>FUNDAMIGO</strong> en brindar una educación de calidad a mi hija y a tantos otros estudiantes
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 96 960 960" class="inline-block w-6">
                        <path fill="currentColor"
                            d="M580 556h160V396H580v160Zm-360 0h160V396H220v160Zm406 220 80-160H520V336h280v288l-76 152h-98Zm-360 0 80-160H160V336h280v288l-76 152h-98Zm34-300Zm360 0Z" />
                    </svg>
                </p>
                @include('svg.starts')
            </div>
            @php */ @endphp

        </div>

    </section>
</div>
<!-- Container for demo purpose -->