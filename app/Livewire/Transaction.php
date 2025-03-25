<?php

namespace App\Livewire;

use Livewire\Component;

use Livewire\WithPagination;
use App\Models\Mark;
use App\Models\Transaction as Trans;
use Auth;
class Transaction extends Component
{
    use WithPagination;

    public string $bookName;
    public string $bookMark;
    public string $member;
    public $showButton=0;
    public function searchBook(){
        //dd($this->bookMark);
        $test=Trans::where('member_id',$this->member)->where('mark_id',$this->bookMark)->where('status','Kitobxonda')->first();

        if ($test==null){

            $mark=Mark::with('book')->where('id',$this->bookMark)->where('status','<>','Kitobxonda')->first();
            if($mark==null){
    
            }else{
                $this->bookName=$mark->book->name;
                $this->showButton=1;
            }
        }
        //$this->reset(['bookMark']);


    }

    public function saveBook(){

        Trans::create([

            'user_id'=>Auth::user()->id,
            'member_id'=>$this->member,
            'mark_id'=>$this->bookMark,
            'status'=>'Kitobxonda'
        ]);
         Mark::where('id',$this->bookMark)->update(['status'=>'Kitobxonda']);
         $this->reset(['bookMark']);

        // $table->id();
        // $table->foreignUuid('user_id');
        // $table->foreignUuid('member_id')->nullable();
        // $table->foreignUuid('mark_id');
        // $table->string('status');
        // $table->timestamps();

    }

    public function render()
    {
        $trans=Trans::with(['mark.book'])->paginate(10);
        $button=$this->showButton;
        return view('livewire.transaction',compact('trans','button'));
    }
}
