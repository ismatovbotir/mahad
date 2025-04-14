<?php

namespace App\Livewire\Book;

use Livewire\Component;
use Livewire\WithoutUrlPagination;
use Livewire\WithPagination;
use App\Models\Book;
use App\Models\Ebook;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Session;



class Index extends Component
{
    use WithPagination;
    use WithFileUploads;
    public string $search='';
    public $pdf;
    public $showLoad=0;
    
    public function loadPDF($id){
       // dd($id);
        //dd($this->file('pdf'));

        $file=$this->pdf;
        if($file!=null){
            $ext=$file->getClientOriginalExtension();
            dd($ext);
            if($ext=="pdf"){
                
                $ebook=Ebook::create(['book_id'=>$id]);
                $newFileName=$ebook->id.'.'.$ext;
                $path=$file->storeAs('ebooks',$newFileName,'public');
                $ebook->pdf='storage/'.$path;
                $ebook->save();
                Session::flash('message','pdf Saqlandi');
            }else{
                Session::flash('message','pdf Tanlang');
            }
            $this->reset(['pdf']);


        }
        $this->reset(['pdf']);

    }

    
    public function render()
    {
        $agg=Book::with('ebook')->withCount(
            [
               
                'marks as new' => function ($query) {
                    $query->where('status', 0);
                },
                'marks as library' => function ($query) {
                    $query->where('status', 1);
                }
                ,
                'marks as member' => function ($query) {
                    $query->where('status', 2);
                },
                'marks as defected' => function ($query) {
                    $query->where('status', 3);
                }
            ]);
        if($this->search==''){
            
            $books=$agg->paginate(10);
        }else{
            $books=$agg
                        ->where('name','like','%'.$this->search.'%')
                        ->orWhere('origin_name','like','%'.$this->search.'%')
                        ->orWhere('author','like','%'.$this->search.'%')
                        
                        ->paginate(10);
        }
       //dd($books);
        return view('livewire.book.index',compact('books'));
    }
}
