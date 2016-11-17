<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Postitle extends Model
{
    protected $table = 'postitles';

    protected $guarded  = ['id'];

    public function jobtitles()
    {
        return $this->belongsTo('App\Jobtitle');
    }
}
