<!-- Section: Design Block -->

@section('styles') 
    @parent 
    <style>
        .background-radial-gradient-hero {
            background-color: hsl(219, 63%, 80%);
            background-image: radial-gradient(650px circle at 0% 0%,
                    hsl(201, 100%, 82%) 15%,
                    hsl(200, 98%, 47%) 35%,
                    hsl(200, 71%, 51%) 75%,
                    hsl(200, 25%, 84%) 80%,
                    transparent 100%),
                radial-gradient(1250px circle at 100% 100%,
                    hsl(200, 100%, 70%) 15%,
                    hsl(200, 82%, 81%) 35%,
                    hsl(200, 60%, 53%) 75%,
                    hsl(200, 73%, 84%) 80%,
                    transparent 100%);
        }

        #radius-shape-1 {
            height: 220px;
            width: 220px;
            top: -60px;
            left: -130px;
            background: radial-gradient(#115a1d, #58984c);
            overflow: hidden;
        }

        #radius-shape-2 {
            border-radius: 38% 62% 63% 37% / 70% 33% 67% 30%;
            bottom: -60px;
            right: -110px;
            width: 300px;
            height: 300px;
            /* background: radial-gradient(#44006b, #ad1fff); */
            background: radial-gradient(#115a1d, #58984c);
            overflow: hidden;
        }
    </style>
@endsection

<section class="background-radial-gradient-hero mb-2 overflow-hidden">
    
    <!-- Jumbotron -->
    <div class="px-2 py-12 text-center md:px-6 lg:py-24 lg:text-left rounded-sm shadow-sm">
        {{-- <div class="w-100 mx-auto text-neutral-800 sm:max-w-2xl md:max-w-3xl lg:max-w-5xl xl:max-w-7xl"> --}}
        <div class="w-100 mx-auto text-neutral-800 ">
            <div class="grid items-center gap-12 lg:grid-cols-2">

                <div class="mt-12 lg:mt-0 backdrop-blur-sm bg-white/30 p-4 rounded" style="z-index: 10">
                    <h1
                        class="mt-0 mb-12 text-5xl font-bold tracking-tight md:text-6xl xl:text-7xl text-[hsl(218,81%,50%)]">
                        Juntos, podemos marcar <br /><span class="text-[hsl(219,34%,17%)]">la diferencia en la educación</span>
                    </h1>
                    <p class="opacity-70 text-[hsl(214,5%,25%)]">
                        En <strong>FUNDAMIGO</strong>, sabemos que la educación es una responsabilidad compartida. Con tu apoyo, podemos marcar la diferencia en la vida de nuchos de estudiantes, integrandonos para proporcionar una educación de calidad y preparándolos para enfrentar los desafíos del futuro. Únete a nuestra fundación comprometida
                    </p>
                </div>

                <div class="relative mb-12 lg:mb-0">

                    @auth 
                        @include('home.hero.partials.dashboard')
                    @else
                        @include('home.hero.partials.tabs')
                    @endauth
                    
                </div>

            </div>
        </div>
    </div>
    <!-- Jumbotron -->
</section>
<!-- Section: Design Block -->