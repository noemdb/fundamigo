<!-- Title Input -->
<div class="mb-4">
    <label for="title" class="block text-gray-600">Título del Post</label>
    <input type="text" id="title" name="title"
        class="w-full border border-gray-300 rounded-md py-2 px-3 focus:outline-none focus:border-blue-500"
        autocomplete="off" wire:model="title">
    @error('title') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
</div>

<!-- Description Input -->
<div class="mb-4">
    <label for="description" class="block text-gray-600">Descripción</label>
    <input type="text" id="description" name="description"
        class="w-full border border-gray-300 rounded-md py-2 px-3 focus:outline-none focus:border-blue-500"
        autocomplete="off" wire:model="description">
    @error('description') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
</div>

<!-- Body Input -->
<div class="mb-4">
    <label for="body" class="block text-gray-600">Contenido</label>
    <textarea id="body" name="body"
        class="w-full border border-gray-300 rounded-md py-2 px-3 focus:outline-none focus:border-blue-500"
        rows="5" wire:model="body"></textarea>
    @error('body') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
</div>

<!-- Category Selection -->
<div class="mb-4">
    {{-- <label for="category" class="block text-gray-600">Categoría</label>
    <select id="category" name="category"
        class="w-full border border-gray-300 rounded-md py-2 px-3 focus:outline-none focus:border-blue-500"
        wire:model="category_id">
        <option value="">Seleccione una categoría</option>
        @foreach($categories as $category)
            <option value="{{ $category->id }}">{{ $category->name }}</option>
        @endforeach
    </select> --}}

    <x-select
        label="Seleccione una Categoría"
        placeholder="Categoría"
        :options="$list_categories"
        option-key-value="true"
        wire:model="category_id"
    />
    @error('category_id') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
</div>

<!-- Color Class Selection -->
<div class="mb-4">
    <x-select
        label="Seleccione un color"
        placeholder="Seleccione un color"
        :options="$list_colors"
        wire:model="color_class"
    />
    @error('color_class') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
</div>

<!-- Status Toggle -->
<div class="mb-4">
    <label class="block text-gray-600">Estado del Post</label>
    <div class="flex items-center gap-4">
        <label class="flex items-center">
            <input type="checkbox" wire:model="status_active" class="mr-2" value="1" > Activo
        </label>
        <label class="flex items-center">
            <input type="checkbox" wire:model="status_published" class="mr-2" value="1" > Publicado
        </label>
    </div>
    @error('status_active') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
</div>

@php $file_url = $image?->temporaryUrl() ?? $post->file_url ?? null; @endphp

@if ($file_url) <x-card> <img src="{{ $file_url }}"> </x-card> @endif

{{-- <input type="file" wire:model="image" class=""> --}}

<input
    class="relative m-0 block w-full min-w-0 flex-auto cursor-pointer rounded border border-solid border-secondary-500 bg-transparent bg-clip-padding px-3 mb-2 py-[0.32rem] text-base font-normal text-surface transition duration-300 ease-in-out file:-mx-3 file:-my-[0.32rem] file:me-3 file:cursor-pointer file:overflow-hidden file:rounded-none file:border-0 file:border-e file:border-solid file:border-inherit file:bg-transparent file:px-3  file:py-[0.32rem] file:text-surface focus:border-primary focus:text-gray-700 focus:shadow-inset focus:outline-none dark:border-white/70 dark:text-white  file:dark:text-white"
    wire:model="image"
    type="file"
/>

@error('image') <span class="error">{{ $message }}</span> @enderror