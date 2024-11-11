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
                    {{-- @include('home.hero.partials.login') --}}
                    @include('home.hero.partials.tabs')
                    @endauth


                    {{-- <div id="radius-shape-1" class="absolute rounded-full shadow-lg"></div>
                    <div id="radius-shape-2" class="absolute shadow-lg"></div>
                    <div
                        class="relative bg-[hsla(139,18%,17%,1)] backdrop-blur-[25px] backdrop-saturate-[200%] block rounded-lg px-6 py-12 shadow-[0_2px_15px_-3px_rgba(0,0,0,0.07),0_10px_20px_-2px_rgba(0,0,0,0.04)] md:px-12">
                        <form>
                            <div class="grid md:grid-cols-2 md:gap-6">
                                <div class="relative mb-6" data-te-input-wrapper-init>
                                    <input type="text"
                                        class="peer block min-h-[auto] w-full rounded border-1 bg-transparent py-[0.32rem] px-3 leading-[1.6] outline-none transition-all duration-200 ease-linear focus:placeholder:opacity-100 data-[te-input-state-active]:placeholder:opacity-100 motion-reduce:transition-none [&:not([data-te-input-placeholder-active])]:placeholder:opacity-0"
                                        id="exampleFormControlInput1" placeholder="First name" />
                                    <label for="exampleFormControlInput1"
                                        class="pointer-events-none absolute top-0 left-3 mb-0 max-w-[90%] origin-[0_0] truncate pt-[0.37rem] leading-[1.6] text-neutral-300 transition-all duration-200 ease-out peer-focus:-translate-y-[0.9rem] peer-focus:scale-[0.8] peer-focus:text-primary peer-data-[te-input-state-active]:-translate-y-[0.9rem] peer-data-[te-input-state-active]:scale-[0.8] motion-reduce:transition-none">
                                        Nombre
                                    </label>
                                </div>
                                <div class="relative mb-6" data-te-input-wrapper-init>
                                    <input type="text"
                                        class="peer block min-h-[auto] w-full rounded border-1 bg-transparent py-[0.32rem] px-3 leading-[1.6] outline-none transition-all duration-200 ease-linear focus:placeholder:opacity-100 data-[te-input-state-active]:placeholder:opacity-100 motion-reduce:transition-none [&:not([data-te-input-placeholder-active])]:placeholder:opacity-0"
                                        id="heroFormControlInput2" placeholder="Last name" />
                                    <label for="heroFormControlInput2"
                                        class="pointer-events-none absolute top-0 left-3 mb-0 max-w-[90%] origin-[0_0] truncate pt-[0.37rem] leading-[1.6] text-neutral-300 transition-all duration-200 ease-out peer-focus:-translate-y-[0.9rem] peer-focus:scale-[0.8] peer-focus:text-primary peer-data-[te-input-state-active]:-translate-y-[0.9rem] peer-data-[te-input-state-active]:scale-[0.8] motion-reduce:transition-none">
                                        Apellido
                                    </label>
                                </div>
                            </div>
                            <div class="relative mb-6" data-te-input-wrapper-init>
                                <input type="email"
                                    class="peer block min-h-[auto] w-full rounded border-1 bg-transparent py-[0.32rem] px-3 leading-[1.6] outline-none transition-all duration-200 ease-linear focus:placeholder:opacity-100 data-[te-input-state-active]:placeholder:opacity-100 motion-reduce:transition-none [&:not([data-te-input-placeholder-active])]:placeholder:opacity-0"
                                    id="exampleFormControlInput3" placeholder="Email" />
                                <label for="exampleFormControlInput3"
                                    class="pointer-events-none absolute top-0 left-3 mb-0 max-w-[90%] origin-[0_0] truncate pt-[0.37rem] leading-[1.6] text-neutral-300 transition-all duration-200 ease-out peer-focus:-translate-y-[0.9rem] peer-focus:scale-[0.8] peer-focus:text-primary peer-data-[te-input-state-active]:-translate-y-[0.9rem] peer-data-[te-input-state-active]:scale-[0.8] motion-reduce:transition-none">
                                    Email
                                </label>
                            </div>
                            <div class="relative mb-6" data-te-input-wrapper-init>
                                <input type="password"
                                    class="peer block min-h-[auto] w-full rounded border-1 bg-transparent py-[0.32rem] px-3 leading-[1.6] outline-none transition-all duration-200 ease-linear focus:placeholder:opacity-100 data-[te-input-state-active]:placeholder:opacity-100 motion-reduce:transition-none [&:not([data-te-input-placeholder-active])]:placeholder:opacity-0"
                                    id="exampleFormControlInput4" placeholder="Password" />
                                <label for="exampleFormControlInput4"
                                    class="pointer-events-none absolute top-0 left-3 mb-0 max-w-[90%] origin-[0_0] truncate pt-[0.37rem] leading-[1.6] text-neutral-300 transition-all duration-200 ease-out peer-focus:-translate-y-[0.9rem] peer-focus:scale-[0.8] peer-focus:text-primary peer-data-[te-input-state-active]:-translate-y-[0.9rem] peer-data-[te-input-state-active]:scale-[0.8] motion-reduce:transition-none">
                                    Password
                                </label>
                            </div>

                            <button type="button" data-te-ripple-init data-te-ripple-color="light"
                                class="mb-6 inline-block w-full rounded bg-primary px-6 pt-2.5 pb-2 text-xs font-medium uppercase leading-normal text-white shadow-[0_4px_9px_-4px_#3b71ca] transition duration-150 ease-in-out hover:bg-primary-600 hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:bg-primary-600 focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:outline-none focus:ring-0 active:bg-primary-700 active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)]">
                                Registrese
                            </button>

                        </form>
                    </div> --}}
                </div>

            </div>
        </div>
    </div>
    <!-- Jumbotron -->
</section>
<!-- Section: Design Block -->