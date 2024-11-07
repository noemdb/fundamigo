<?php

namespace App\Livewire\User;

use App\Models\Profile;
use App\Models\User;
use Livewire\Component;
use Livewire\WithPagination;

class IndexComponent extends Component
{
    use WithPagination;

    public $expertise='';
    public $list_expertise;

    public function search()
    {
        $this->resetPage();
    }

    public function mount()
    {
        $this->list_expertise = Profile::EXPERTISE;
    }

    public function render()
    {
        $users = User::select('users.*')->join('profiles', 'users.id', '=', 'profiles.user_id');
        $users = ($this->expertise) ? $users->where('profiles.areas_of_expertise',$this->expertise) : $users ;
        $users = $users->paginate(10);
        return view('livewire.user.index-component',[
            'users' => $users,
        ]);
    }

    public function updatedExpertise($value)
    {
        //dd($value);
    }
}
