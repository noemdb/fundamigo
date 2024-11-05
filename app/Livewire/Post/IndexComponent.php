<?php

namespace App\Livewire\Post;

use App\Models\app\Post;
use App\Models\app\Post\Category;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Livewire\Attributes\On;
use Livewire\WithFileUploads;
use Livewire\WithoutUrlPagination;
use Livewire\WithPagination;
use WireUi\Traits\Actions;
use Livewire\Attributes\Validate;

class IndexComponent extends Component
{
    use Actions;
    use WithPagination, WithoutUrlPagination; 
    use WithFileUploads;

    public $modeCreate,$modeIndex,$modeEdit;

    public $id;
    public $user_id;
    public $title;
    public $description;
    public $body;
    public $category_id;
    public $color_class = 'secondary'; // Color por defecto
    public bool $status_active = false;     // Estado activo por defecto
    public bool $status_published = false;  // Estado publicado por defecto
    public $categories,$post;

    #[Validate('image|max:1024')] // 1MB Max
    public $image;

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

    #[On('post-update-list')] 
    public function updatePostList()
    {
        $this->modeDefault();
    }

    public function mount()
    {
        $this->categories = Category::all();
        $this->modeDefault();
    }

    public function setModeCreate()
    {
        $this->modeDefault();
        $this->modeCreate = true;
    }

    public function setModeEdit($id)
    {
        $this->modeDefault();
        $this->modeEdit = true;
        
        $post = Post::findOrFail($id);
        
        $this->post = $post;
        $this->id = $post->id;
        $this->user_id = $post->user_id;
        $this->category_id = $post->category_id;
        $this->title = $post->title;
        $this->description = $post->description;
        $this->body = $post->body;
        $this->color_class = $post->color_class;
        $this->status_active = $post->status_active;
        $this->status_published = $post->status_published;
    }

    public function updatePost()
    {
        $data = $this->validate();
        $url = $this->upLoadImage($this->image);
        $this->post->update([
            'user_id' => Auth::id(),
            'category_id' => $this->category_id,
            'title' => $this->title,
            'description' => $this->description,
            'body' => $this->body,
            'color_class' => $this->color_class,
            'status_active' => $this->status_active,
            'status_published' => $this->status_published,
            'file_url' => $url,
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
        $posts = Post::all();
        return view('livewire.post.index-component',[
            'posts' => Post::paginate(10),
        ]);
    }

    public function modeDefault()
    {
        $this->modeIndex = true;
        $this->modeCreate = false;
        $this->modeEdit = false;
    }

    public function storePost()
    {
        $this->validate();
        $url = $this->upLoadImage($this->image);

        Post::create([
            'user_id' => Auth::id(),
            'category_id' => $this->category_id,
            'title' => $this->title,
            'description' => $this->description,
            'body' => $this->body,
            'color_class' => $this->color_class,
            'status_active' => $this->status_active,
            'status_published' => $this->status_published,
            'file_url' => $url,
        ]);

        $this->notification([
            'title'       => 'Post Guardado',
            'description' => 'Excelecte!!! la información fue almacenada con éxito.',
            'icon'        => 'success'
        ]);

        $this->clearInputs();
        $this->dispatch('post-update-list'); 
    }

    public function upLoadImage($image)
    {
        $url = ($image) ? $image->store('images','posts') : null;
        return ($url) ? 'storage/posts/'.$url : null;
    }

    public function clearInputs()
    {
        $this->category_id = null;
        $this->title = null;
        $this->description = null;
        $this->body = null;
        $this->color_class = null;
        $this->status_active = false;
        $this->status_published = false;
        $this->resetErrorBag();
    }
}
