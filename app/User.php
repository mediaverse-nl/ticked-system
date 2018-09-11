<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

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

    public function message(){
        return $this->hasMany('Message', 'user_id', 'id');
    }

    public function ticket(){
        return $this->hasMany('Ticket', 'user_id', 'id');
    }

    public function userRole(){
        return $this->hasMany('UserRole', 'user_id', 'id');
    }
    public function company(){
        return $this->hasMany('Company', 'company_id', 'id');
    }
    //EXAMPLE
//    public function orders(){
//        return $this->hasMany('Order', 'order_id', 'id');
//    }
}
