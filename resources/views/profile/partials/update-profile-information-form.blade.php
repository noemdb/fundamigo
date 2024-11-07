<section>
    <header>
        <h2 class="text-lg font-medium text-gray-900">
            {{ __('Información sobre el perfil') }}
        </h2>

        <div class="flex justify-between">            
            <div class="flex-shrink mt-1 text-sm text-gray-600">
                {{ __("Actualice la información de perfil y la dirección de correo electrónico de su cuenta.") }}
            </div>
            <div class="px-2">
                @php $src = optional($user->profile)->image; @endphp
                <x-avatar xl :src="$src" size="w-24 h-24"/>
            </div>
        </div>
    </header>

    <form id="send-verification" method="post" action="{{ route('verification.send') }}">
        @csrf
    </form>

    <form method="post" action="{{ route('profile.update') }}" enctype="multipart/form-data" class="mt-6 space-y-6">
        @csrf
        @method('patch')

        <x-card title="Datos para el inicio de sesión" shadow="false" class="mt-1 border-b-2">
            <div>
                <x-input-label for="name" :value="__('Nombre de Usuario')" />
                <x-text-input id="name" name="name" type="text" class="mt-1 block w-full" :value="old('name', $user->name)" required autofocus required autocomplete="Nombre de Usuario" />
                <x-input-error class="mt-2" :messages="$errors->get('name')" />
            </div>
    
            <div>
                <x-input-label for="email" :value="__('Email')" />
                <x-text-input id="email" name="email" type="email" class="mt-1 block w-full" :value="old('email', $user->email)" required required autocomplete="username" />
                <x-input-error class="mt-2" :messages="$errors->get('email')" />
    
                @if ($user instanceof \Illuminate\Contracts\Auth\MustVerifyEmail && ! $user->hasVerifiedEmail())
                    <div>
                        <p class="text-sm mt-2 text-gray-800">
                            {{ __('Su dirección de correo electrónico no está verificada.') }}
    
                            <button form="send-verification" class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                                {{ __('Haga clic aquí para volver a enviar el correo electrónico de verificación.') }}
                            </button>
                        </p>
    
                        @if (session('status') === 'verification-link-sent')
                            <p class="mt-2 font-medium text-sm text-green-600">
                                {{ __('Se ha enviado un nuevo enlace de verificación a su dirección de correo electrónico.') }}
                            </p>
                        @endif
                    </div>
                @endif
            </div>
        </x-card>  
        
        <x-card title="Datos del perfil del usuario" shadow="false" class="mt-1 border-b-2">

            <div class="py-2">
                <x-input-label for="first_name" :value="__('Nombre')" />
                @php $first_name = optional($user->profile)->first_name; @endphp
                <x-text-input id="first_name" name="first_name" type="text" class="mt-1 block w-full" :value="old('first_name', $first_name)" required autofocus autocomplete="given-name" />
                <x-input-error class="mt-2" :messages="$errors->get('first_name')" />
            </div>
    
            <div class="py-2">
                <x-input-label for="last_name" :value="__('Apellido')" />
                @php $last_name = optional($user->profile)->last_name; @endphp
                <x-text-input id="last_name" name="last_name" type="text" class="mt-1 block w-full" :value="old('last_name', $last_name)" required autocomplete="family-name" />
                <x-input-error class="mt-2" :messages="$errors->get('last_name')" />
            </div>
    
            <div class="py-2">
                <x-input-label for="identity_document" :value="__('Documento de identidad')" />
                @php $identity_document = optional($user->profile)->identity_document; @endphp
                <x-text-input id="identity_document" name="identity_document" type="text" class="mt-1 block w-full" :value="old('identity_document', $identity_document)" required autocomplete="identity-document" />
                <x-input-error class="mt-2" :messages="$errors->get('identity_document')" />
            </div>
    
            <div class="py-2">
                <x-input-label for="profession" :value="__('Profesión')" />
                @php $profession = optional($user->profile)->profession; @endphp
                <x-text-input id="profession" name="profession" type="text" class="mt-1 block w-full" :value="old('profession', $profession)" required autocomplete="profession" />
                <x-input-error class="mt-2" :messages="$errors->get('profession')" />
            </div>
    
            <div class="py-2">
                <x-input-label for="occupation" :value="__('Ocupación')" />
                @php $occupation = optional($user->profile)->occupation; @endphp
                <x-text-input id="occupation" name="occupation" type="text" class="mt-1 block w-full" :value="old('occupation', $occupation)" required autocomplete="occupation" />
                <x-input-error class="mt-2" :messages="$errors->get('occupation')" />
            </div>
    
            <div class="py-2">
                @php $areas_of_expertise = optional($user->profile)->areas_of_expertise; @endphp
                <x-select
                    label="Seleccione un área de conocimiento"
                    placeholder="Seleccione un área"
                    :options="$list_expertise"
                    name="areas_of_expertise"
                    :value="$areas_of_expertise"
                />
                <x-input-error class="mt-2" :messages="$errors->get('areas_of_expertise')" />
            </div>
    
            <div class="py-2">
                @php $specializations = optional($user->profile)->specializations; @endphp
                <x-input-label for="specializations" :value="__('Especializaciones')" />
                <textarea id="specializations" name="specializations" rows="3" class="border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm mt-1 block w-full" required autocomplete="specializations">{{ old('specializations', $specializations) }}</textarea>
                <x-input-error class="mt-2" :messages="$errors->get('specializations')" />
            </div>        
    
            <div class="py-2">
                <x-input-label for="phone" :value="__('Teléfono')" />
                @php $phone = optional($user->profile)->phone; @endphp
                <x-text-input id="phone" name="phone" type="tel" class="mt-1 block w-full" :value="old('phone', $phone)" required autocomplete="tel" />
                <x-input-error class="mt-2" :messages="$errors->get('phone')" />
            </div>
    
            <div class="py-2">
                <x-input-label for="address" :value="__('Dirección')" />
                @php $address = optional($user->profile)->address; @endphp
                <textarea id="address" name="address" rows="3" class="border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm mt-1 block w-full" required autocomplete="address">{{ old('address', $address) }}</textarea>
                <x-input-error class="mt-2" :messages="$errors->get('address')" />
            </div>
    
            <div class="py-2">
                <x-input-label for="birthdate" :value="__('Fecha de nacimiento')" />
                @php $birthdate = optional($user->profile)->birthdate; @endphp
                <x-text-input id="birthdate" name="birthdate" type="date" class="mt-1 block w-full" :value="old('birthdate', $birthdate ? $birthdate->format('Y-m-d') : '')" required autocomplete="bday" />
                <x-input-error class="mt-2" :messages="$errors->get('birthdate')" />
            </div>
    
            {{-- <div>
                <x-input-label for="role" :value="__('Rol')" />
                <select id="role" name="role" class="mt-1 block w-full" autocomplete="role">
                    <option value="member" {{ $user->profile->role == 'member' ? 'selected' : '' }}>{{ __('Miembro') }}</option>
                    <option value="volunteer" {{ $user->profile->role == 'volunteer' ? 'selected' : '' }}>{{ __('Voluntario') }}</option>
                    <option value="staff" {{ $user->profile->role == 'staff' ? 'selected' : '' }}>{{ __('Personal') }}</option>
                    <option value="admin" {{ $user->profile->role == 'admin' ? 'selected' : '' }}>{{ __('Administrador') }}</option>
                </select>
                <x-input-error class="mt-2" :messages="$errors->get('role')" />
            </div> --}}
    
            <div class="py-2">
                <x-input-label for="status" :value="__('Estado')" />
                @php $status = optional($user->profile)->status; @endphp
                <select id="status" name="status" class="border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm mt-1 block w-full" autocomplete="status">
                    <option value="active" {{ $status == 'active' ? 'selected' : '' }}>{{ __('Activo') }}</option>
                    <option value="inactive" {{ $status == 'inactive' ? 'selected' : '' }}>{{ __('Inactivo') }}</option>
                </select>
                <x-input-error class="mt-2" :messages="$errors->get('status')" />
            </div>

            <div class="py-2">
                <x-input-label for="status" :value="__('Imagen/Avatar')" />
                @php $image = optional($user->profile)->image; @endphp
                @if ($image) <x-card> <img src="{{ $image }}"> </x-card> @endif
                <input
                    class="relative m-0 block w-full min-w-0 flex-auto cursor-pointer rounded border border-solid border-secondary-500 bg-transparent bg-clip-padding px-3 mb-2 py-[0.32rem] text-base font-normal text-surface transition duration-300 ease-in-out file:-mx-3 file:-my-[0.32rem] file:me-3 file:cursor-pointer file:overflow-hidden file:rounded-none file:border-0 file:border-e file:border-solid file:border-inherit file:bg-transparent file:px-3  file:py-[0.32rem] file:text-surface focus:border-primary focus:text-gray-700 focus:shadow-inset focus:outline-none dark:border-white/70 dark:text-white  file:dark:text-white"
                    name="image"
                    type="file"
                />
            </div>            
    
            <div class="flex items-center gap-4">
                <x-primary-button class="w-full">{{ __('Guardar') }}</x-primary-button>
    
                @if (session('status') === 'profile-updated')
                    <p
                        x-data="{ show: true }"
                        x-show="show"
                        x-transition
                        x-init="setTimeout(() => show = false, 2000)"
                        class="text-sm text-gray-600"
                    >{{ __('Perfil actualizado.') }}</p>
                @endif
            </div>

        </x-card> 

        
    </form>
</section>