<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\BookName;
use App\Models\Mark;
use App\Models\Writer;
use App\Models\Category;
use Illuminate\Database\Eloquent\Concerns\HasUuids;

class Book extends Model
{
    use HasFactory, HasUuids;
    protected $guarded=[];
    public function bookNames(){
        return $this->hasMany(BookName::class);
    }

    public function marks(){
        return $this->hasMany(Mark::class);
    }

   

    public function category(){
        return $this->belongsTo(Category::class);
    }
}
