<?php

namespace App\Livewire\Post;

use App\Models\app\Post;
use App\Models\app\Post\Category;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use WireUi\Traits\Actions;

class Edit extends Component
{
    use Actions;

    public $title;
    public $description;
    public $body;
    public $category_id;
    public $color_class = 'secondary'; // Color por defecto
    public $status_active = false;     // Estado activo por defecto
    public $status_published = false;  // Estado publicado por defecto
    public $categories,$post;

    // Reglas de validación para los campos
    protected function rules()
    {
        return [
            'title' => 'required|string|max:255',
            'description' => 'nullable|string|max:255',
            'body' => 'required|string',
            'category_id' => 'required|exists:categories,id',
            'color_class' => 'required|in:primary,secondary,positive,negative,warning,info,dark,white,black,slate,gray,zinc,neutral,stone,red,orange,amber,lime,green,emerald,teal,cyan,sky,blue,indigo,violet,purple,fuchsia,pink,rose',
            'status_active' => 'boolean|nullable',
            'status_published' => 'boolean|nullable',
        ];
    }

    public function mount($post_id)
    {
        $this->categories = Category::all();
        $this->post = Post::findOrFail($post_id);
    }

    // Guardar el post
    public function storePost()
    {
        $this->validate(); // Validar datos

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

        $this->dispatch('post-update-list');       

    }

    public function render()
    {        
        return view('livewire.post.edit');
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