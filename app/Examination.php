<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Patient;
use App\Examination;

class Examination extends Model
{
    public function patient() 
    {
        return $this->belongsTo('App\Patient');
    }
}
