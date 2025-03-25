<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\Role;

class Member extends Model
{
    use HasFactory;
    use HasUuids;

    protected $guarded=[];

    public function role(){
        return $this->belongsTo(Role::class);
    }
}
