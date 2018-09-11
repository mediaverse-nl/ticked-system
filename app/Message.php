<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    //

    public function files(){
        return $this->hasMany('Files', 'message_id', 'id');
    }

    public function ticket(){
        return $this->belongsTo('ticket', 'user_id', 'id');
    }
    public function user(){
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
