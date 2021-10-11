<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BugPermission extends Model
{
    use HasFactory;

    public function users()
    {
        return $this->belongsTo(User::class,'permission_id','permission_id');
    }
}
