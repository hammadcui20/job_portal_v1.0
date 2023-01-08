<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Database\Eloquent\Casts\Attribute;

class Candidate extends Authenticatable
{
    use HasFactory;
    public $timestamps=false;
    // public function can()
    // {
    //     return $this->belongsTo(User::class,'u_id','id');
    // }
  
}

