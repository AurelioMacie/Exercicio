<?php

namespace App\Entities;

use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authentificatable;

class User extends Authentificatable{

    use  SoftDeletes;
    use Notifiable;

    public $timestamps  = true;
    protected $table    = 'users';
    protected $fillable = ['nuit', 'name', 'phone', 'birth', 'gender', 'notes', 'email', 'password', 'status', 'permission'];
    protected $hidden   = ['password', 'remember_token'];


}
