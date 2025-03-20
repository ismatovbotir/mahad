<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\BookName;
use App\Models\BookMark;
use App\Models\Writer;
use App\Models\Category;
use Illuminate\Database\Eloquent\Concerns\HasUuids;

class Book extends Model
{
    use HasFactory, HasUuids;

    public function bookNames(){
        return $this->hasMany(BookName::class);
    }

    public function bookMark(){
        return $this->hasMany(BookMark::class);
    }

    public function writers(){
        return $this->belongsToMany(Writer::class,'book_writer');
    }

    public function category(){
        return $this->belongsTo(Category::class);
    }
}
