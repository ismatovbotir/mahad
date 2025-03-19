<?php

namespace App\Livewire\Member;

use Livewire\Component;
use App\Models\Role;
use App\Models\Member;
class Create extends Component
{
    public $title="Yangi Talaba";
    public $name;
    public $surename;
    public $phone;
    public $bday;
    public $email;

    public function createMember(){
        $bdate = date("Y-m-d", strtotime($this->bday));
        Member::create(
            [
                'name'=>$this->name,
                'surename'=>$this->surename
            ]
        );
        //$this->dispatch('member-created');
        //dd($bdate);
        //dd(Carbon::parse($this->dbay)->format('Y-m-d\TH:i'));
    }
    public function render()
    {
        $roles=Role::where('type',2)->get();
        return view('livewire.member.create',compact('roles'));
    }
}
