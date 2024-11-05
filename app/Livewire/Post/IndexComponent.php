<?php

namespace App\Livewire\Post;

use App\Models\app\Post;
use App\Models\User;
use Livewire\Component;
use Livewire\Attributes\On;
use Livewire\WithoutUrlPagination;
use Livewire\WithPagination;
use WireUi\Traits\Actions;

class IndexComponent extends Component
{
    use Actions;
    use WithPagination, WithoutUrlPagination; 

    public $modeCreate,$modeIndex,$modeEdit;

    #[On('post-created')] 
    public function updatePostList()
    {
        $this->modeDefault();
    }

    public function mount()
    {
        $this->modeDefault();
    }

    public function setModeCreate()
    {
        $this->modeDefault();
        $this->modeCreate = true;
    }

    public function setModeEdit()
    {
        $this->modeDefault();
        $this->modeEdit = true;
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
}
