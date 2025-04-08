<?php

namespace App\Livewire\Book;

use Livewire\Component;
use Livewire\WithoutUrlPagination;
use Livewire\WithPagination;
use App\Models\Book;
use App\Models\Category;



class Index extends Component
{
    use WithPagination;
    public string $search='';
    
    
    public function render()
    {
        $agg=Book::withCount(
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
