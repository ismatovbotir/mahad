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
use Illuminate\Support\Facades\Session;


class MarkIndex extends Component
{
    use WithPagination;
    public $id='';
    public $qty;
    public $search=''; 
    public $searchMark='';
    public $printItems=[];
    

    public function mount(){
        $this->qty=1;
        
    }
    public function createMark(){
        $library=Library::first();
        $book=Book::where('id',$this->id)->first();
        $shelf=$book->shelf;
        $idx=Mark::where('book_id',$book->id)->count();    
        $newLabels=[];
        for($x=1;$x<=$this->qty;$x++){
            $mark=Mark::create(
                [
                    'book_id'=>$this->id,
                    'shelf'=>$shelf,
                    'idx'=>$idx+$x,
                    'library_id'=>$library->id
                ]
                );
                $this->printItems[]=$mark->id;

        }
        Session::put('labels',$this->printItems);

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
        $this->printItems=[];

    }
    public function searchMark(){
        dd('searching');
        $this->searchMark=$this->search;

    }

    
    public function updatePrintItems(){
        
        Session::put('labels',$this->printItems);
    }

    public function render()
    {
       //dd($this->printItems);
       if($this->searchMark==''){ 
            $marks=Mark::where('book_id',$this->id)->orderBy('idx','asc')->paginate(5);
       }else{
            $marks=Mark::where([
                    ['book_id',$this->id],
                    ['id',$this->searchMark]
                
                ])->paginate(5);
       } //dd($marks);
       $this->search='';
       $printItems=$this->printItems;
        return view('livewire.book.mark-index',compact('marks','printItems'));
    }
}
