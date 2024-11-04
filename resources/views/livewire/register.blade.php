<div>
    @if (session()->has('success'))
        <div class="bg-green-500 text-white text-center py-2 px-4 mb-4 rounded">
            {{ session('success') }}
        </div>
    @endif

    @include('livewire.auth.register')

</div>
