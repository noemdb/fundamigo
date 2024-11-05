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
    <label for="category" class="block text-gray-600">Categoría</label>
    <select id="category" name="category"
        class="w-full border border-gray-300 rounded-md py-2 px-3 focus:outline-none focus:border-blue-500"
        wire:model="category_id">
        <option value="">Seleccione una categoría</option>
        @foreach($categories as $category)
            <option value="{{ $category->id }}">{{ $category->name }}</option>
        @endforeach
    </select>
    @error('category_id') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
</div>

<!-- Color Class Selection -->
<div class="mb-4">
    <label for="color_class" class="block text-gray-600">Color de la Categoría</label>
    <select id="color_class" name="color_class"
        class="w-full border border-gray-300 rounded-md py-2 px-3 focus:outline-none focus:border-blue-500"
        wire:model="color_class">
        <option value="">Seleccione un color</option>
        <option value="primary">Primario</option>
        <option value="secondary">Secundario</option>
        <option value="positive">Positivo</option>
        <option value="negative">Negativo</option>
        <!-- Otros colores según los definidos en tu migración -->
    </select>
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

@php $file_url = ($post) ? $post->file_url : $image->temporaryUrl() ; @endphp

@if ($file_url) <img src="{{ $file_url }}"> @endif
<input type="file" wire:model="image">
@error('image') <span class="error">{{ $message }}</span> @enderror