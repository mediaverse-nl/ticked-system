<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    //
    public function userRole(){
        return $this->hasMany('User_Role', 'role_id', 'id');
    }
}
