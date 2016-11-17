<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Jobtitle extends Model
{
    protected $table = 'jobtitles';

    protected $guarded  = ['id'];

    public function postitles()
    {
        return $this->hasMany('App\Postitle');
    }
}
