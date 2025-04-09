<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\Role;
use App\Models\Transaction;
use App\Models\Course;

class Member extends Model
{
    use HasFactory;
    use HasUuids;

    protected $guarded=[];

    public function role(){
        return $this->belongsTo(Role::class);
    }
    public function course(){
        return $this->belongsTo(Course::class);
    }
    public function transaction(){
        return $this->hasMany(Transaction::class)->where('status',2)->where('state',0);
    }
}
