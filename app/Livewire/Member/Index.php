<?php

namespace App\Livewire\Member;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Role;
use App\Models\Member;
use Livewire\Attributes\On;

class Index extends Component
{
    use WithPagination;
    public string $search;
    
    public function mount(){
        $this->search='';
    }
    

    //#[On('member-created')]
    public function render()
    {

        $title="Kutubxona a'zolari";
        $roles=Role::where('type',2)->get();
        //dd($roles);
        if($this->search==''){

            $data=Member::paginate(10);
        }else{
            //dd($this->search);
            $data=Member::where('name','like','%'.$this->search.'%')->orWhere('surename','like','%'.$this->search.'%')->paginate(10);
        }
        
        return view('livewire.member.index',compact('title','roles','data'));
    }
}
