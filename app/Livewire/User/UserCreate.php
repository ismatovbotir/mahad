<?php

namespace App\Livewire\User;

use Livewire\WithPagination;
use Livewire\Component;

class UserCreate extends Component
{
    public $users;
    public array $roles=[];
    public function render()
    {
      
        $roles=Role::where('type',2)->get();
        //dd($roles);
        $data=Member::paginate(10);
        return view('livewire.user.user-create',compact('data','title','roles'));
        
    }
}
