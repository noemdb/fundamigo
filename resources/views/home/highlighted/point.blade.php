<x-card class="h-full">

    @slot('header')
    <h3 class="text-green-950 bg-warning-100 rounded-t-xl p-2 text-xl font-bold">
        <div class="h-full flex items-center">
            <x-icon name="credit-card" class="flex-none w-10 h-10" />
            <div class="flex-initial">Punto de Venta Virtual.</div>
        </div>
    </h3>
    @endslot

    <div
        class="h-full block bg-white">
        <div class="relative overflow-hidden bg-cover bg-no-repeat" data-te-ripple-init data-te-ripple-color="light">
            <div class="flex justify-center">
                <img class="rounded-t-lg w-24 h-24" src="{{asset('image/logo/btnpayment.png')}}" alt="" />
                <a href="#!">
                    <div
                        class="absolute bottom-0 left-0 right-0 top-0 h-full w-full overflow-hidden bg-[hsla(0,0%,98%,0.15)] bg-fixed opacity-0 transition duration-300 ease-in-out hover:opacity-100">
                    </div>
                </a>
            </div>
            <div class="text-center ">
                <div class="text-3xl text-gray-900">TPV Botón de Pago CFLA</div>
                <div class="text-md text-red-600 font-bold">PAGO DIRECTO</div>
                <div class="text-md text-gray-600">Asistente</div>
                <div class="text-sm text-gray-900">Verificación, concialición y registro automático.</div>
                <div class="text-sm text-orange-400 font-bold">Procesado por el Consorcio Credicard
                    .</div>
            </div>
        </div>
        <div class="text-xs text-gray-200flex justify-between items-center bg-orange-100 p-4 my-4 rounded-lg origin-bottom rotate-2">
            <div class="text-xs mb-4 text-neutral-600">
                Seguimos trabajando en la mejora de nuestros servicios, hemos agregado una nueva opción de pago aún más rápida a través de esta conexión.
            </div>
            <div class="text-xs mb-4 text-neutral-600">
                <span class="font-bold">Tarjetas de débito aceptadas: </span>                
                <span>Banco de Venezuela, Bancaribe, Banco del Tesoro, Mi Banco, Bancamiga, Bancrecer y BANFANB.</span>
            </div>
            <div class="text-xs mb-4 text-neutral-600">
                <span class="font-bold">Verificación, concialición y registro automático: </span>                
                <span>Tus pagos son registrados automaticamente en el <span class=" text-green-950 font-bold">SAEFL</span>.</span>
            </div>            
        </div>
        <div class="flex justify-end">
            @php $url = env('APP_URL_SAEFL','.').'/service/payment/button/credicard'; @endphp
            <x-button href="{{$url ?? null}}" target="_blank" label="Comenzar" warning class="w-full"/>
        </div>
    </div>

</x-card>

{{--  --}}