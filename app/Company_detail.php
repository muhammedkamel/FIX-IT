<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class Company_detail extends Model
{
    public $timestamps = false;
  use SoftDeletes;
    public function user(){
        return $this->belongsTo('App\User', 'company_id', 'id');
    }

}
