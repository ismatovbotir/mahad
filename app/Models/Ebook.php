<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\Book;

class Ebook extends Model
{
    use HasFactory,HasUuids;

    public $guarded=[];

    public function book(){
        return $this->belongsTo(Book::class);
    }
}
