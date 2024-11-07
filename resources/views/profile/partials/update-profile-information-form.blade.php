<section>
    <header>
        <h2 class="text-lg font-medium text-gray-900">
            {{ __('Información sobre el perfil') }}
        </h2>

        <p class="mt-1 text-sm text-gray-600">
            {{ __("Actualice la información de perfil y la dirección de correo electrónico de su cuenta.") }}
        </p>
    </header>

    <form id="send-verification" method="post" action="{{ route('verification.send') }}">
        @csrf
    </form>

    <form method="post" action="{{ route('profile.update') }}" class="mt-6 space-y-6">
        @csrf
        @method('patch')

        <div>
            <x-input-label for="first_name" :value="__('Nombre')" />
            <x-text-input id="first_name" name="first_name" type="text" class="mt-1 block w-full" :value="old('first_name', $user->profile->first_name)" required autofocus autocomplete="given-name" />
            <x-input-error class="mt-2" :messages="$errors->get('first_name')" />
        </div>

        <div>
            <x-input-label for="last_name" :value="__('Apellido')" />
            <x-text-input id="last_name" name="last_name" type="text" class="mt-1 block w-full" :value="old('last_name', $user->profile->last_name)" required autocomplete="family-name" />
            <x-input-error class="mt-2" :messages="$errors->get('last_name')" />
        </div>

        <div>
            <x-input-label for="identity_document" :value="__('Documento de identidad')" />
            <x-text-input id="identity_document" name="identity_document" type="text" class="mt-1 block w-full" :value="old('identity_document', $user->profile->identity_document)" required autocomplete="identity-document" />
            <x-input-error class="mt-2" :messages="$errors->get('identity_document')" />
        </div>

        <div>
            <x-input-label for="profession" :value="__('Profesión')" />
            <x-text-input id="profession" name="profession" type="text" class="mt-1 block w-full" :value="old('profession', $user->profile->profession)" autocomplete="profession" />
            <x-input-error class="mt-2" :messages="$errors->get('profession')" />
        </div>

        <div>
            <x-input-label for="occupation" :value="__('Ocupación')" />
            <x-text-input id="occupation" name="occupation" type="text" class="mt-1 block w-full" :value="old('occupation', $user->profile->occupation)" autocomplete="occupation" />
            <x-input-error class="mt-2" :messages="$errors->get('occupation')" />
        </div>

        <div>
            <x-input-label for="areas_of_expertise" :value="__('Áreas de conocimiento')" />
            <textarea id="areas_of_expertise" name="areas_of_expertise" rows="3" class="mt-1 block w-full" autocomplete="areas-of-expertise">{{ old('areas_of_expertise', $user->profile->areas_of_expertise) }}</textarea>
            <x-input-error class="mt-2" :messages="$errors->get('areas_of_expertise')" />
        </div>

        <div>
            <x-input-label for="specializations" :value="__('Especializaciones')" />
            <textarea id="specializations" name="specializations" rows="3" class="mt-1 block w-full" autocomplete="specializations">{{ old('specializations', $user->profile->specializations) }}</textarea>
            <x-input-error class="mt-2" :messages="$errors->get('specializations')" />
        </div>

        <div>
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" name="email" type="email" class="mt-1 block w-full" :value="old('email', $user->email)" required autocomplete="username" />
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

        <div>
            <x-input-label for="phone" :value="__('Teléfono')" />
            <x-text-input id="phone" name="phone" type="tel" class="mt-1 block w-full" :value="old('phone', $user->profile->phone)" autocomplete="tel" />
            <x-input-error class="mt-2" :messages="$errors->get('phone')" />
        </div>

        <div>
            <x-input-label for="address" :value="__('Dirección')" />
            <textarea id="address" name="address" rows="3" class="mt-1 block w-full" autocomplete="address">{{ old('address', $user->profile->address) }}</textarea>
            <x-input-error class="mt-2" :messages="$errors->get('address')" />
        </div>

        <div>
            <x-input-label for="birthdate" :value="__('Fecha de nacimiento')" />
            <x-text-input id="birthdate" name="birthdate" type="date" class="mt-1 block w-full" :value="old('birthdate', $user->profile->birthdate ? $user->profile->birthdate->format('Y-m-d') : '')" autocomplete="bday" />
            <x-input-error class="mt-2" :messages="$errors->get('birthdate')" />
        </div>

        <div>
            <x-input-label for="role" :value="__('Rol')" />
            <select id="role" name="role" class="mt-1 block w-full" autocomplete="role">
                <option value="member" {{ $user->profile->role == 'member' ? 'selected' : '' }}>{{ __('Miembro') }}</option>
                <option value="volunteer" {{ $user->profile->role == 'volunteer' ? 'selected' : '' }}>{{ __('Voluntario') }}</option>
                <option value="staff" {{ $user->profile->role == 'staff' ? 'selected' : '' }}>{{ __('Personal') }}</option>
                <option value="admin" {{ $user->profile->role == 'admin' ? 'selected' : '' }}>{{ __('Administrador') }}</option>
            </select>
            <x-input-error class="mt-2" :messages="$errors->get('role')" />
        </div>

        <div>
            <x-input-label for="status" :value="__('Estado')" />
            <select id="status" name="status" class="mt-1 block w-full" autocomplete="status">
                <option value="active" {{ $user->profile->status == 'active' ? 'selected' : '' }}>{{ __('Activo') }}</option>
                <option value="inactive" {{ $user->profile->status == 'inactive' ? 'selected' : '' }}>{{ __('Inactivo') }}</option>
            </select>
            <x-input-error class="mt-2" :messages="$errors->get('status')" />
        </div>

        <div class="flex items-center gap-4">
            <x-primary-button>{{ __('Guardar') }}</x-primary-button>

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
    </form>
</section>