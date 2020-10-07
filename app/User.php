<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Spatie\Permission\Traits\hasRoles;

/**
 * Class User
 * 
 * This is Class handler for Users table, This Class was extended from use Illuminate\Foundation\Auth\User as Authenticatable, all method and attribute was ready provided by use Illuminate\Foundation\Auth\User as Authenticatable class and can be implement it in this class
 */
class User extends Authenticatable
{
    use Notifiable, hasRoles;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}
