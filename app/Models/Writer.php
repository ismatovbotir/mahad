<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Book;

class Writer extends Model
{
    use HasFactory, HasUuids;

    public function books(){
        return $this->belongsToMany(Book::class,'book_writer');
    }
}
