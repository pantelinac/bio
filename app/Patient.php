<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Patient;
use App\Examination;

class Patient extends Model
{
      public function examinations()
    {
        return $this->hasMany('App\Examination');
    }
}
