<?php

namespace App\Livewire\Book;


use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Livewire\WithoutUrlPagination;
use Livewire\WithPagination;

use App\Models\Mark;
use App\Models\Book;
use App\Models\Library;
use App\Models\Transaction as Trans;


class MarkIndex extends Component
{
    use WithPagination;
    public $id='';
    public $qty;
    public $search=''; 
    public $searchMark='';
    

    public function mount(){
        $this->qty=1;
        
    }
    public function createMark(){
        $library=Library::first();
        $book=Book::where('id',$this->id)->first();
        $shelf=$book->shelf;
        for($x=1;$x<=$this->qty;$x++){
            Mark::create(
                [
                    'book_id'=>$this->id,
                    'shelf'=>$shelf,
                    'library_id'=>$library->id
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

    public function restoration($id,$value){
        Trans::create([

            'user_id' => Auth::user()->id,
            
            'mark_id' => $id,
            'status' => $value
        ]);
        
        Mark::where('id',$id)->update([
            'status'=>$value
        ]);
        //dd('done');
    }

    public function justUpdate(){

    }
    public function searchMark(){
        dd('searching');
        $this->searchMark=$this->search;

    }

    public function render()
    {
       //dd($this->id);
       if($this->searchMark==''){ 
            $marks=Mark::where('book_id',$this->id)->paginate(5);
       }else{
            $marks=Mark::where([
                    ['book_id',$this->id],
                    ['id',$this->searchMark]
                
                ])->paginate(5);
       } //dd($marks);
       $this->search='';
        return view('livewire.book.mark-index',compact('marks'));
    }
}
