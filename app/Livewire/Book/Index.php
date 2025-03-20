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
        //$categories=Category::all();
        $books=Book::with('writers')->paginate(10);
        return view('livewire.book.index',compact('books'));
    }
}
