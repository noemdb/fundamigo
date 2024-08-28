<?php

namespace App\Livewire\Post;

use App\Models\User;
use Livewire\Component;

class IndexComponent extends Component
{
    public $modeCreate,$modeIndex,$modeEdit;

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
        $posts = User::all();
        return view('livewire.post.index-component',[
            'posts'=>$posts,
        ]);
    }

    public function modeDefault()
    {
        $this->modeIndex = true;
        $this->modeCreate = false;
        $this->modeEdit = false;
    }
}
