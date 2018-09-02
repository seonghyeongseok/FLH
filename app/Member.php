<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Member extends Authenticatable
{
    use Notifiable;
    //
    protected $guarded = [
        'member_id', 'remember_token'
    ];

    protected $hidden = [
        'password', 'remember_token'
    ];
}
