<?php

namespace App\Livewire\Trans;

use Livewire\Component;


use Livewire\WithPagination;
use App\Models\Mark;
use App\Models\Transaction as Trans;
use Illuminate\Support\Facades\Auth;
use Livewire\Attributes\On;

class Body extends Component
{
    use WithPagination;
   
    
    public string $bookName;
    public string $bookMark;
    public string $member;
    public $showButton = 0;
    public $message;
    

   
    
    #[On('mark-status')]
    public function render()
    {
        $trans = Trans::with(['mark.book'])->where([
            ['member_id',$this->member],
            ['status',2],
            ['state',0]
            ])            
            ->paginate(10);
            
            

        $message=$this->message;
        $button = $this->showButton;
        return view('livewire.trans.body', compact('trans', 'button','message'));
    }
}

