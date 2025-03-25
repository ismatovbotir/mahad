<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\Mark;
use App\Models\User;
use App\Models\Member;

class Transaction extends Model
{
    use HasFactory;
    protected $guarded=[];

    public function mark(){
        return $this->belongsTo(Mark::class);
    } 

    public function user(){
        return $this->belongsTo(User::class);

    }

    public function member(){
        return $this->belongsTo(Member::class);
    }
}
