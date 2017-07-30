<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Patient extends Model
{
      public function examinations()
    {
        return $this->hasMany('App\Examination');
    }
    
    public function user() 
    {
        return $this->belongsTo('App\User');
    }
}
