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
        if($this->search==''){
        $books=Book::withCount('marks')->paginate(10);
        }else{
            $books=Book::withCount('marks')
                        ->where('name','like','%'.$this->search.'%')
                        ->orWhere('origin_name','like','%'.$this->search.'%')
                        ->orWhere('author','like','%'.$this->search.'%')
                        
                        ->paginate(5);
        }
       // dd($books);
        return view('livewire.book.index',compact('books'));
    }
}
