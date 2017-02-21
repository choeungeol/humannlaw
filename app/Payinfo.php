<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Payinfo extends Model
{
    protected $table = 'payinfos';

    protected $guarded  = ['id'];

    public function person_infos()
    {
        return $this->belongsTo('App\Pinfo');
    }
}
