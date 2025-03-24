<?php
//22032025
namespace App\Livewire\User;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\User;
use App\Models\Role;

class Index extends Component
{
    use WithPagination;
    public string $search;
    
    public function mount(){
        $this->search='';
    }
    
    public function deleteUser($id){
        User::where('id',$id)->delete();
    }
    //#[On('member-created')]
    public function render()
    {

        $title="Kutubxona Xodimlari";
        $roles=Role::where('type',1)->get();
        //dd($roles);
        if($this->search==''){

            $data=User::paginate(10);
        }else{
            //dd($this->search);
            $data=User::where('name','like','%'.$this->search.'%')->paginate(10);
        }
        
        return view('livewire.user.index',compact('title','roles','data'));
    }
   
}
