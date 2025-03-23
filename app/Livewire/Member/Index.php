<?php
//22032025
namespace App\Livewire\Member;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Role;
use App\Models\Member;
use Livewire\Attributes\On;
use Auth;
use App\Models\MembersLog;
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
        $roles=Role::where('type',2)->orderBy('name','desc')->get();
        //dd($roles);
        if($this->search==''){

            $data=Member::paginate(10);
        }else{
            //dd($this->search);
            $data=Member::where('name','like','%'.$this->search.'%')->orWhere('surename','like','%'.$this->search.'%')->paginate(10);
        }
        
        return view('livewire.member.index',compact('title','roles','data'));
    }
    public function block($id){
        $member=Member::find($id)->update(['status'=>0]);
        MembersLog::create(
            [
                'member_id'=>$id,
                'user_id'=>Auth::user()->id,
                'log'=>'blocked'
            ]
        );
        
        //dd($id);
    }
    public function active($id){
        $member=Member::find($id)->update(['status'=>1]);
        MembersLog::create(
            [
                'member_id'=>$id,
                'user_id'=>Auth::user()->id,
                'log'=>'activated'
            ]
        );
        
        //dd($id);
    }
}
