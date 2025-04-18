<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\Member;

class Role extends Model
{
    use HasFactory;

    public function users(){
        return $this->hasMany(User::class);
    }

    public function member(){
        return $this->hasMany(Member::class);
    } 
    
}
