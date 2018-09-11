<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserRole extends Model
{
    public function role(){
        return $this->belongsTo('role', 'role_id', 'id');
}
    public function user(){
        return $this->belongsTo('user', 'user_id', 'id');
    }
    //
}
