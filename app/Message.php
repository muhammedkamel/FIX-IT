<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
 
 	public $timestamps = false;

    public function sender(){
        return $this->belongsTo('App\User', 'sender_id', 'id');
    }


    public function receiver(){
        return $this->belongsTo('App\User', 'receiver_id', 'id');
    }
}