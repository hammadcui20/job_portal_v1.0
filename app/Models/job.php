<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Database\Eloquent\Casts\Attribute;

class job extends Authenticatable
{
    use HasFactory;
    // public function jo()
    // {
    //     $key=11;
    //     return $this->belongsTo(Company::class,'u_id');
    // }
}
