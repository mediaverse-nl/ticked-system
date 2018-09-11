<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{

    public function message()
    {
        return $this->hasMany('Message', 'user_id', 'id');
    }

    public function user()
    {
        return $this->belongsTo('user', 'user_id', 'id');
    }

    public static function status(){
        return [
            'open',
            'pending',
            'closed'
        ];
    }
}
