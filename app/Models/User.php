<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array
     */
    protected $hidden = ['password'];

    /**
     * The attributes that should be cast.
     *
     * @var array
     */
    public function permission()
    {
        return $this->belongsTo(Permission::class);
    }

    public function bugPermission()
    {
        return $this->hasOne(BugPermission::class,'permission_id','permission_id');
    }

    public function ticketPermission()
    {
        return $this->hasOne(TicketPermission::class,'permission_id','permission_id');
    }
}
