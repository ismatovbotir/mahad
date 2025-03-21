<?php

namespace App\Livewire\Book;

use Livewire\Component;
use Livewire\WithoutUrlPagination;

use App\Models\Mark;
use App\Models\Book;

class MarkIndex extends Component
{
    public $id='';
    public $qty;
    

    public function mount(){
        $this->qty=1;
        
    }
    public function createMark(){
        $book=Book::where('id',$this->id)->first();
        $shelf=$book->shelf;
        for($x=1;$x<=$this->qty;$x++){
            Mark::create(
                [
                    'book_id'=>$this->id,
                    'shelf'=>$shelf
                ]
                );
        }

        $this->qty=1;
    }
    public function updateShelf($id,$value){
        Mark::where('id',$id)->update([
            'shelf'=>$value
        ]);

    }
    public function justUpdate(){

    }

    public function render()
    {
       //dd($this->id);
        $marks=Mark::where('book_id',$this->id)->paginate(10);
        return view('livewire.book.mark-index',compact('marks'));
    }
}
