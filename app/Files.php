<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Files extends Model
{
    public function message(){
        return $this->belongsTo('message', 'message_id', 'id');
    }

    public static function fileType(){
        return [
            '.png',
            '.jpg',
            '.jpeg',
            '.pdf',
            '.doc',
            '.docx',
            '.ppt',
            '.pptx',
            '.xls',
            '.xlsx',
            '.mp4'

        ];
    }
}
