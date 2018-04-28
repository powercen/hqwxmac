<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Member extends Authenticatable
{
    protected $fillable = ['enumber', 'password', 'name', 'phone', 'avatar', 'id_number', 'group'];
}
