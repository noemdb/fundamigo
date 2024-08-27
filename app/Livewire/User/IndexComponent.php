<?php

namespace App\Livewire\User;

use App\Models\User;
use Livewire\Component;

class IndexComponent extends Component
{
    // public $users;

    public function render()
    {
        $users = User::all();
        return view('livewire.user.index-component',[
            'users'=>$users,
        ]);
    }
}
