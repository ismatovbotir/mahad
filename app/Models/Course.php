<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Member;

class Course extends Model
{
    use HasFactory;

    public $guarded=[];

    public function members(){
        return $this->hasMany(Member::class);
    }
}
