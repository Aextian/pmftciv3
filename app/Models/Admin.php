<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Notifications\Notifiable;
use Laravel\Passport\HasApiTokens;


class Admin extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    protected $table = 'admins';
   
    protected $guarded = ['id'];
    
    // protected $fillable = [
    //     'first_name',
    //     'middle_name',
    //     'last_name',
    //     'ext_name',
    //     'email',
    //     'password',
    //     'card_no',
    //     'avatar',
    //     'is_active',

    // ];

    // protected $hidden = [
    //     'password',
    //     'remember_token',
    // ];

    // protected $casts = [
    //     'email_verified_at' => 'datetime',
    //     'password' => 'hashed',
    // ];
}
