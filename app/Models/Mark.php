<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mark extends Model
{
    use HasFactory, HasUuids;

    protected $guarded=[];
    public function book(){
        return $this->belongsTo(Book::class);
    }
}
