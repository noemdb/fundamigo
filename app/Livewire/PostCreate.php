<?php

namespace App\Livewire;

use App\Models\app\Post;
use App\Models\app\Post\Category;
use Livewire\Component;
use Illuminate\Support\Facades\Auth;
use WireUi\Traits\Actions;

class PostCreate extends Component
{
    use Actions;

    public $title;
    public $description;
    public $body;
    public $category_id;
    public $color_class = 'secondary'; // Color por defecto
    public $status_active = false;     // Estado activo por defecto
    public $status_published = false;  // Estado publicado por defecto
    public $categories;

    // Reglas de validación para los campos
    protected function rules()
    {
        $class_color = implode(",",Post::COLORS);
        return [
            'title' => 'required|string|max:255',
            'description' => 'nullable|string|max:255',
            'body' => 'required|string',
            'category_id' => 'required|exists:categories,id',
            'color_class' => 'required|in:'.$class_color,
            'status_active' => 'boolean|nullable',
            'status_published' => 'boolean|nullable',
        ];
    }

    public function mount()
    {
        $this->categories = Category::all();
        $this->clearInputs();
    }
    
    public function storePost()
    {
        $this->validate(); 
        Post::create([
            'user_id' => Auth::id(),
            'category_id' => $this->category_id,
            'title' => $this->title,
            'description' => $this->description,
            'body' => $this->body,
            'color_class' => $this->color_class,
            'status_active' => $this->status_active,
            'status_published' => $this->status_published,
        ]);
        $this->notification([
            'title'       => 'Post Guardado',
            'description' => 'Excelecte!!! la información fue almacenada con éxito.',
            'icon'        => 'success'
        ]);
        $this->clearInputs();
        $this->dispatch('post-created');
    }

    public function render()
    {        
        return view('livewire.post-create');
    }

    public function clearInputs()
    {
        $this->category_id = null;
        $this->title = null;
        $this->description = null;
        $this->body = null;
        $this->color_class = null;
        $this->status_active = null;
        $this->status_published = null;
        $this->resetErrorBag();
    }
}
